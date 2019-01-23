<?php //

namespace GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

//class UsuarioController extends Controller {

//    /**
//     * @Route("/prueba/numero")
//     */
//    public function numberAction() {
//        $number = random_int(0, 100);
//
//        return new Response(
//                '<html><body>numero: ' . $number . '</body>'
//                . '<h1>hello world!</h1>'
//                . '</html>'
//        );
//    }
//
//    /**
//     * @Route("/prueba/numero/{max}")
//     */
//    public function numberAction_1($max) {
//        $number = random_int(0, $max);
//
//        return new Response(
//                '<html><body>Lucky number: ' . $number . '</body></html>'
//        );
//    }
//
//    /**
//     * @Route("/user/index")
//     */
//    public function indexAction() {
//        $em = $this->getDoctrine()->getManager();
//        $query = $em->createQuery('SELECT u FROM GestionBundle:Usuario u');
//        $users = $query->getResult();
//        $cadena='';
//        foreach ($users as $user){
//            $cadena=$cadena.' '.$user->getUsername()."<br>";
//        }
//        return new Response('<html>'
//                
//                . '<h1>usuarios</h1>'
//                . ''.$cadena
//                . ''
//                . ''
//                . '</hmtl>');
//        
//    }

    
    
//}
