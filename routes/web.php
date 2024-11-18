<?php 
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::resource('tasks', TaskController::class);
Route::patch('tasks/{task}/completed', [TaskController::class, 'completed'])->name('tasks.completed');
?>