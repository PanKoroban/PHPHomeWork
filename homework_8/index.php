<?phprequire_once 'autoload.php';session_start();//site.ru/index.php?act=auth&c=User$action = 'action_';$action .=(isset($_GET['act'])) ? $_GET['act'] : 'index';switch ($_GET['c']){	case 'User':		$controller = new C_User();		break;    case 'good':        $controller = new C_Good();        break;    case 'basket':        $controller = new C_Basket();        break;    case 'auth':        $controller = new C_Auth();        break;    case 'orders':        $controller = new C_Orders();        break;    case 'admin':        $controller = new C_Admin();        break;	default:		$controller = new C_Catalog();}$controller->Request($action);