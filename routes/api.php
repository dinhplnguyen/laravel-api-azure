<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Http\Controllers\api\StudentsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('students', [StudentsController::class, 'index']);


// Route::get('students', function () {
//     return Student::all();
// });

// Route::get('students/{student}', function (Student $student) {
//     return $student;
// });


// Route::get('students/{student}', [StudentsController::class, 'show']);

// Route::post('students', function () {
//     // validate the input
//     request()->validate([
//         'FirstName' => 'required',
//         'LastName' => 'required',
//         'School' => 'required',
//     ]);

//     return Student::create([
//         'FirstName' => request('FirstName'),
//         'LastName' => request('LastName'),
//         'School' => request('School'),
//     ]);
// });

// Route::post('/students', [StudentsController::class, 'store']);

// Route::put('students/{student}', function (Student $student) {
//     request()->validate([
//         'FirstName' => 'required',
//         'LastName' => 'required',
//         'School' => 'required',
//     ]);

//     $isSuccess = $student->update([
//         'FirstName' => request('FirstName'),
//         'LastName' => request('LastName'),
//         'School' => request('School'),
//     ]);

//     return [
//         'success' => $isSuccess
//     ];
// });

// Route::delete('students/{student}', function (Student $student) {
//     $isSuccess = $student->delete();
//     return ['success' => $isSuccess];
// });

// Route::delete('students/{student}', [StudentsController::class, 'destroy']);
Route::get('students', [StudentsController::class, 'index']);
Route::get('students/{student}', [StudentsController::class, 'show']);
Route::post('/students', [StudentsController::class, 'store']);
Route::put('students/{student}', [StudentsController::class, 'update']);
Route::delete('students/{student}', [StudentsController::class, 'destroy']);
