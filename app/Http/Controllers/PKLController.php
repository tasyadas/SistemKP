<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePKLRequest;
use App\Http\Requests\UpdatePKLRequest;
use App\Repositories\PKLRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Siswa;
use App\Models\jurusan;
use App\Models\Bengkel;

class PKLController extends AppBaseController
{
    /** @var  PKLRepository */
    private $pKLRepository;

    public function __construct(PKLRepository $pKLRepo)
    {
        $this->pKLRepository = $pKLRepo;
        // $this->nis = Siswa::pluck('nis','id');
        // $this->name = Siswa::pluck('name','id');
        // $this->jurusan = jurusan::pluck('name','id');
        // $this->kelas = Siswa::pluck('class','id');
        // $this->company = Bengkel::pluck('name','id');
        $this->data = Siswa::all();

        // $this->middleware('role:super_admin,admin');
    }

    /**
     * Display a listing of the PKL.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pKLS = $this->pKLRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return view('p_k_l_s.index')
            ->with('pKLS', $pKLS);
    }

    /**
     * Show the form for creating a new PKL.
     *
     * @return Response
     */
    public function create()
    {
        $nis = Siswa::pluck('nis', 'id');

        return view('p_k_l_s.create')
                ->with('nis', $nis);
                // ->with('name', $this->name)
                // ->with('jurusan', $this->jurusan)
                // ->with('kelas', $this->kelas)
                // ->with('company', $this->company);
    }

    /**
     * Store a newly created PKL in storage.
     *
     * @param CreatePKLRequest $request
     *
     * @return Response
     */
    public function store(CreatePKLRequest $request)
    {
        $input = $request->all();

        $pKL = $this->pKLRepository->create($input);

        Flash::success('Internship data saved successfully.');

        return redirect(route('pKLS.index'));
    }

    /**
     * Display the specified PKL.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pKL = $this->pKLRepository->find($id);

        if (empty($pKL)) {
            Flash::error('Internship data not found');

            return redirect(route('pKLS.index'));
        }

        return view('p_k_l_s.show')->with('pKL', $pKL);
    }

    /**
     * Show the form for editing the specified PKL.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pKL = $this->pKLRepository->find($id);

        if (empty($pKL)) {
            Flash::error('Internship data not found');

            return redirect(route('pKLS.index'));
        }

        return view('p_k_l_s.edit')->with('pKL', $pKL);
    }

    /**
     * Update the specified PKL in storage.
     *
     * @param int $id
     * @param UpdatePKLRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePKLRequest $request)
    {
        $pKL = $this->pKLRepository->find($id);

        if (empty($pKL)) {
            Flash::error('Internship data not found');

            return redirect(route('pKLS.index'));
        }

        $pKL = $this->pKLRepository->update($request->all(), $id);

        Flash::success('Internship data updated successfully.');

        return redirect(route('pKLS.index'));
    }

    /**
     * Remove the specified PKL from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pKL = $this->pKLRepository->find($id);

        if (empty($pKL)) {
            Flash::error('Internship data not found');

            return redirect(route('pKLS.index'));
        }

        $this->pKLRepository->delete($id);

        Flash::success('Internship data deleted successfully.');

        return redirect(route('pKLS.index'));
    }
}
