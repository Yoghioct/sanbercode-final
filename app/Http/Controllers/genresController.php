<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreategenresRequest;
use App\Http\Requests\UpdategenresRequest;
use App\Repositories\genresRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class genresController extends AppBaseController
{
    /** @var genresRepository $genresRepository*/
    private $genresRepository;

    public function __construct(genresRepository $genresRepo)
    {
        $this->genresRepository = $genresRepo;
    }

    /**
     * Display a listing of the genres.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $genres = $this->genresRepository->all();

        return view('genres.index')
            ->with('genres', $genres);
    }

    /**
     * Show the form for creating a new genres.
     *
     * @return Response
     */
    public function create()
    {
        return view('genres.create');
    }

    /**
     * Store a newly created genres in storage.
     *
     * @param CreategenresRequest $request
     *
     * @return Response
     */
    public function store(CreategenresRequest $request)
    {
        $input = $request->all();

        $genres = $this->genresRepository->create($input);

        Flash::success('Genres saved successfully.');

        return redirect(route('genres.index'));
    }

    /**
     * Display the specified genres.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $genres = $this->genresRepository->find($id);

        if (empty($genres)) {
            Flash::error('Genres not found');

            return redirect(route('genres.index'));
        }

        return view('genres.show')->with('genres', $genres);
    }

    /**
     * Show the form for editing the specified genres.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $genres = $this->genresRepository->find($id);

        if (empty($genres)) {
            Flash::error('Genres not found');

            return redirect(route('genres.index'));
        }

        return view('genres.edit')->with('genres', $genres);
    }

    /**
     * Update the specified genres in storage.
     *
     * @param int $id
     * @param UpdategenresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdategenresRequest $request)
    {
        $genres = $this->genresRepository->find($id);

        if (empty($genres)) {
            Flash::error('Genres not found');

            return redirect(route('genres.index'));
        }

        $genres = $this->genresRepository->update($request->all(), $id);

        Flash::success('Genres updated successfully.');

        return redirect(route('genres.index'));
    }

    /**
     * Remove the specified genres from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $genres = $this->genresRepository->find($id);

        if (empty($genres)) {
            Flash::error('Genres not found');

            return redirect(route('genres.index'));
        }

        $this->genresRepository->delete($id);

        Flash::success('Genres deleted successfully.');

        return redirect(route('genres.index'));
    }
}
