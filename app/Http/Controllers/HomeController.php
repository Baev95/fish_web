<?

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Facade;

class HomeController extends Controller
{
	public function index()
	{
		return view('home');
	}
}
