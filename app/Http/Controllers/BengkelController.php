<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBengkelRequest;
use App\Http\Requests\UpdateBengkelRequest;
use App\Repositories\BengkelRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BengkelController extends AppBaseController
{
    /** @var  BengkelRepository */
    private $bengkelRepository;

    public function __construct(BengkelRepository $bengkelRepo)
    {
        $this->bengkelRepository = $bengkelRepo;
        $this->middleware('role:super_admin,admin,siswa')->only('index', 'show');
        $this->middleware('role:super_admin,admin')->except('index', 'show');
    }

    /**
     * Display a listing of the Bengkel.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $bengkels = $this->bengkelRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return view('bengkels.index')
            ->with('bengkels', $bengkels);
    }

    /**
     * Show the form for creating a new Bengkel.
     *
     * @return Response
     */
    public function create()
    {
        return view('bengkels.create');
    }

    /**
     * Store a newly created Bengkel in storage.
     *
     * @param CreateBengkelRequest $request
     *
     * @return Response
     */
    public function store(CreateBengkelRequest $request)
    {
        $input = $request->all();

        $bengkel = $this->bengkelRepository->create($input);

        Flash::success('Bengkel saved successfully.');

        return redirect(route('bengkels.index'));
    }

    /**
     * Display the specified Bengkel.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bengkel = $this->bengkelRepository->find($id);

        if (empty($bengkel)) {
            Flash::error('Bengkel not found');

            return redirect(route('bengkels.index'));
        }

        return view('bengkels.show')->with('bengkel', $bengkel);
    }

    /**
     * Show the form for editing the specified Bengkel.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bengkel = $this->bengkelRepository->find($id);

        if (empty($bengkel)) {
            Flash::error('Bengkel not found');

            return redirect(route('bengkels.index'));
        }

        return view('bengkels.edit')->with('bengkel', $bengkel);
    }

    /**
     * Update the specified Bengkel in storage.
     *
     * @param int $id
     * @param UpdateBengkelRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBengkelRequest $request)
    {
        $bengkel = $this->bengkelRepository->find($id);

        if (empty($bengkel)) {
            Flash::error('Bengkel not found');

            return redirect(route('bengkels.index'));
        }

        $bengkel = $this->bengkelRepository->update($request->all(), $id);

        Flash::success('Bengkel updated successfully.');

        return redirect(route('bengkels.index'));
    }

    /**
     * Remove the specified Bengkel from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bengkel = $this->bengkelRepository->find($id);

        if (empty($bengkel)) {
            Flash::error('Bengkel not found');

            return redirect(route('bengkels.index'));
        }

        $bengkel->forceDelete();

        Flash::success('Bengkel deleted successfully.');

        return redirect(route('bengkels.index'));
    }
}
