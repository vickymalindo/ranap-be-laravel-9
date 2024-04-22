<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

clASs UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function viewRanap()
    {
        $data = DB::select("SELECT CAST(VW_CLAIM_IP_MONITORING.treat_date as date) as Tgl_Rawat 
        ,VW_CLAIM_IP_MONITORING.ipstatus
        ,VW_CLAIM_IP_MONITORING.nm_cabang_transaksi as Host_Branch_BO_NAYAKA
        ,VW_CLAIM_IP_MONITORING.nm_cabang as Member_Branch_BO_NAYAKA
        ,VW_CLAIM_IP_MONITORING.claim_no
        ,VW_CLAIM_IP_MONITORING.provider_name 
        ,VW_CLAIM_IP_MONITORING.no_kartu
        ,VW_CLAIM_IP_MONITORING.employee_name as Employee_Name
        ,VW_CLAIM_IP_MONITORING.member_name as Patient_Name
        ,VW_CLAIM_IP_MONITORING.nm_cus as Unit_Kerja_Perusahaan
        ,tbl_icd.nama as DX_Masuk
        ,VW_CLAIM_IP_MONITORING_OPEN.st_claim 
        FROM [MCSYS].[dbo].[VW_CLAIM_IP_MONITORING] inner join VW_CLAIM_IP_MONITORING_OPEN on VW_CLAIM_IP_MONITORING.claim_no = VW_CLAIM_IP_MONITORING_OPEN.claim_no inner join tbl_icd on VW_CLAIM_IP_MONITORING.kdicd = tbl_icd.kdicd 
        where VW_CLAIM_IP_MONITORING.treat_date like '%2024%' and VW_CLAIM_IP_MONITORING.nm_holding ='BPJS KETENAGAKERJAAN' and VW_CLAIM_IP_MONITORING.ipstatus ='RWT' and VW_CLAIM_IP_MONITORING_OPEN.st_claim !='200' order by VW_CLAIM_IP_MONITORING.treat_date DESC");

        return view('ranap', ['data' => $data]);
    }

    public function apiRanap()
    {
        $data = DB::select("SELECT CAST(VW_CLAIM_IP_MONITORING.treat_date as date) as Tgl_Rawat 
        ,VW_CLAIM_IP_MONITORING.ipstatus
        ,VW_CLAIM_IP_MONITORING.nm_cabang_transaksi as Host_Branch_BO_NAYAKA
        ,VW_CLAIM_IP_MONITORING.nm_cabang as Member_Branch_BO_NAYAKA
        ,VW_CLAIM_IP_MONITORING.claim_no
        ,VW_CLAIM_IP_MONITORING.provider_name 
        ,VW_CLAIM_IP_MONITORING.no_kartu
        ,VW_CLAIM_IP_MONITORING.employee_name as Employee_Name
        ,VW_CLAIM_IP_MONITORING.member_name as Patient_Name
        ,VW_CLAIM_IP_MONITORING.nm_cus as Unit_Kerja_Perusahaan
        ,tbl_icd.nama as DX_Masuk
        ,VW_CLAIM_IP_MONITORING_OPEN.st_claim 
        FROM [MCSYS].[dbo].[VW_CLAIM_IP_MONITORING] inner join VW_CLAIM_IP_MONITORING_OPEN on VW_CLAIM_IP_MONITORING.claim_no = VW_CLAIM_IP_MONITORING_OPEN.claim_no inner join tbl_icd on VW_CLAIM_IP_MONITORING.kdicd = tbl_icd.kdicd 
        where VW_CLAIM_IP_MONITORING.treat_date like '%2024%' and VW_CLAIM_IP_MONITORING.nm_holding ='BPJS KETENAGAKERJAAN' and VW_CLAIM_IP_MONITORING.ipstatus ='RWT' and VW_CLAIM_IP_MONITORING_OPEN.st_claim !='200' order by VW_CLAIM_IP_MONITORING.treat_date DESC");
        
        return response()->json([
            'message' => 'Get successfully',
            'data' => $data,
            'status' => 200,
          ]);
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
