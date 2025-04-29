use App\Http\Controller\PekerjaController;

Route::apiResource('pekerjas', PekerjaController::class);
Route::get('/pekerjas/count/kategori', [PekerjaController::class, 'countKategori']);