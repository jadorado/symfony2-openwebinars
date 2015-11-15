<?php
namespace AppBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use AppBundle\Entity\Usuarios;
use AppBundle\Form\UsuariosType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
 
class SeguridadController extends Controller
{
    public function loginAction(Request $request)
    {
        $session = $request->getSession();
        
        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                SecurityContext::AUTHENTICATION_ERROR
            );
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
 
        return $this->render(
            'AppBundle:Seguridad:login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                'error'         => $error,
            )
        );
    }
    
    public function registroAction(Request $request)
    {
        $user = new Usuarios();
        $form = $this->createForm(new UsuariosType(), $user);

        if($this->getRequest()->isMethod('POST')){
            
            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $request->request->get('usuarios')['plainPassword']['first']);
            $user->setPassword($password);
            
            $user->setEmail($request->request->get('usuarios')['email']);
            $user->setUsername($request->request->get('usuarios')['username']);
            

            $user->setNombre("pruebaNombre");
            $user->setApellido("pruebaApellido");
            $user->setCiudad("ciudad"); 

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

        
            return $this->redirectToRoute('login');
 
        }
        

        return $this->render(
            'AppBundle:Seguridad:registro.html.twig',
            array('form' => $form->createView())
        );
    }
}