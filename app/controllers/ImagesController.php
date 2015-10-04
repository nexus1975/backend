<?php
class Image extends Eloquent {
    protected $connection;
    function __construct() {
        $this->connection= getenv('OPENSHIFT_MYSQL_DB_HOST') ? 'openshiftmysql' : 'objects_mysql';//'openshiftmysql';        
    }    
    protected $table = 'images';
    //public function changeConnection($conn)
    //{        
    //    $this->connection = $conn;
    //}    
}   

class ImagesController extends \BaseController {

//

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            try {
                $i = new Image();                
                $res = Image::all();
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
            try {
                //$res = DB::connection('rmmysql')->select('select id, name, year from budgets');
                $data = Input::all();
                $image = new Image;
                $image->day = DB::raw('now()');
                $image->imageurl = $data['imageUrl'];
                $image->description = $data['description'];
                $image->request = serialize($data);
                $image->save();
		return Response::json($data);
            } catch (Exception  $e) {
                return Response::json(Array("status"=>"ERROR", "data"=>$e->getMessage()));
            }  				
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
                $res = Image::findOrFail($id);
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
            $res = Image::findOrFail($id);
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
		$Image = Image::find($id);
		$Image->name = Input::get('name');
		$Image->save();
		//return Redirect::route('index');
		return Response::json($Image);	
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
