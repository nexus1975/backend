<?php
class Object extends Eloquent {
    protected $table = 'objects';
}

class ObjectsController extends \BaseController {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            try {
                //$res = DB::connection('rmmysql')->select('select id, name, year from budgets');
                $res = Object::all();
				return Response::json($res);
            } catch (Exception  $e) {
                return Response::json(Array("status"=>"ERROR", "data"=>$e->getMessage()));
            }    
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
            try {
                //$res = DB::connection('rmmysql')->select('select id, name from budgets where id = ?', array($id));
                $res = Object::findOrFail($id);
                return Response::json($res);
            } catch (Exception  $e) {
                return Response::json(Array("status"=>"ERROR", "data"=>$e->getMessage()));
            }
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		try {
            //$res = DB::connection('rmmysql')->select('select id, name from budgets where id = ?', array($id));
            $res = Object::findOrFail($id);
            return Response::json($res);
        } catch (Exception  $e) {
            return Response::json($e->getMessage());
        }
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$Object = Object::find($id);
		$Object->name = Input::get('name');
		$Object->save();
		//return Redirect::route('index');
		return Response::json($Object);	
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
