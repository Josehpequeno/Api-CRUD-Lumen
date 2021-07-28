<?php
    namespace App\Http\Controllers;

    use App\Models\User;
    use Illuminate\Http\Request;

    class UserController extends Controller {
        public function showAllUsers(){
            return response()->json(User::all());
        }

        public function showOneUser($id){
            return response()->json(User::find($id));
        }

        public function create(Request $request){
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed'
            ]);
            $request["password"] = hash('sha256',$request["password"]);
            $user = User::create($request->all());

            return response()->json($user, 201);
        }

        public function update(Request $request, $id){
            /*if (!$request->filled('name')) {
                echo $request;
                return response('Field name empty!');
            }*/
            $this->validate($request, [
                'email' => 'email'
            ]);
            $user = User::findOrFail($id);
            $request["password"] = hash('sha256',$request["password"]);
            $user->update($request->all());

            return response()->json($user, 200);
        }

        public function delete($id){
            User::findOrFail($id)->delete();
            return response('Delete Sucessfully', 200);
        }
    }