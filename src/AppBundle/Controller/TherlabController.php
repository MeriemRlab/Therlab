<?php
// src/AppBundle/Controller/MainController.php

namespace AppBundle\Controller;

use AppBundle\Entity\Comment;
use AppBundle\Form\CommentType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;



class TherlabController extends Controller
{
 
  public function indexAction()
  {
    // array for tag classes of news
    $tagClasses = array(1 => 'One', 'Two', 'Three', 'Four', 'Five');
     //get news informations
    $news = $this->getDoctrine()
            ->getRepository('AppBundle:News')
            ->findNews();

    // get logos images
    //find images
    $images = $this->getDoctrine()
	      ->getRepository('AppBundle:Image')
              ->findLogos();
    
    return $this->render('therlab/index.html.twig', array(
            'news' => $news,
            'images' => $images,
	    'tagClasses' => $tagClasses));
  }

  public function postsAction($page, $categoryId)
  {

    $em = $this->getDoctrine()->getManager();

    if ($page < 1) {
      throw $this->createNotFoundException("Page ".$page." not found.");
    }

  $nbPerPage=3;
    //find all posts
  $listPosts = $this->getDoctrine()
  ->getManager()
  ->getRepository('AppBundle:Post')
  ->getPosts($page,$nbPerPage, $categoryId)
  ;

  //get the number of comments for each post
  $post_commentsNb = array();
  $posts = $em->getRepository('AppBundle:Post') -> findIdsOrderedById();
  foreach ($posts as $post){
  $post_commentsNb[$post['id']]['id'] = $em->getRepository('AppBundle:Comment')->countCommentsbyPost($post['id']);
  }/*end loop*/

//foreach( $post_commentsNb as $value){
//echo("<script>console.log('PHP: ".$value."');</script>");
//}
  //get categories
  $categories = $em->getRepository('AppBundle:Category')
    ->findAllOrderedByName();


   $nbPages = ceil(count($listPosts)/$nbPerPage);

   if ($page > $nbPages){
     throw $this->createNotFoundException("Page ".$page." not found.");
   }

    // L'appel de la vue ne change pas
    return $this->render('therlab/posts.html.twig', array(
      'listPosts' => $listPosts,
      'nbPages' => $nbPages,
      'page' => $page,
      'categories'=> $categories,
      'post_commentsNb' => $post_commentsNb
    ));
  }

  public function postAction($id, Request $request)
  {
   
    $em = $this->getDoctrine()->getManager();

    // get the post of $id
    $post = $em
      ->getRepository('AppBundle:Post')
      ->find($id)
    ;

     if (null === $post) {
      throw new NotFoundHttpException("Post's ".$id." not found");
    }

    // get number of comments on the current post
     $commentsNumber = $em->getRepository('AppBundle:Comment')
    ->countCommentsbyPost($id);


   

    // On récupère les comments de ce post
    $listComments = $em
      ->getRepository('AppBundle:Comment')
      ->findBy(array('post' => $post))
    ;   

   $comment = new Comment();

   $comment -> setPost($post);

   //get categories
  $em = $this->getDoctrine()->getManager();
  $categories = $em->getRepository('AppBundle:Category')
    ->findAllOrderedByName();

   $form = $this->createForm(CommentType::class, $comment);

      	if ($form->handleRequest($request)->isValid()) {
	      $em = $this->getDoctrine()->getManager();
	      $em->persist($comment);
	      $em->flush();

	      $request->getSession()->getFlashBag()->add('notice', 'Comment registered. Wait for the Admin to valid it ! :)');

      	        return $this->redirect($this->generateUrl('platform_post', array(
		'id' => $post->getId())));
    	}
    return $this->render('therlab/post.html.twig', array(
      'post' => $post,
      'listComments' => $listComments,
      'categories'=> $categories,
      'commentsNumber' => $commentsNumber,
      'form' => $form->createView()

    ));
}

 public function membersAction()
  {

    $em = $this->getDoctrine()->getManager();
    
    //find all members
    $members = $em->getRepository('AppBundle:Member')
    ->findAllOrderedByName();

    // L'appel de la vue ne change pas
    return $this->render('therlab/members.html.twig', array(
      'members'=> $members
    ));
  }

   public function projectsAction()
  {

    $em = $this->getDoctrine()->getManager();
    
    //find all members
    $projects = $em->getRepository('AppBundle:ProjectChild')
    ->findAllOrderedById();

    // L'appel de la vue ne change pas
    return $this->render('therlab/projects.html.twig', array(
      'projects'=> $projects
    ));
  }

   public function consultingAction()
  {

    $em = $this->getDoctrine()->getManager();
    
    //find images
    $images = $em->getRepository('AppBundle:Image')
    ->findConsultLogos();


    return $this->render('therlab/consulting.html.twig', array(
      'images'=> $images
    ));
  }

  public function ngosAction()
  {

    $em = $this->getDoctrine()->getManager();
    
    //find images
    $images = $em->getRepository('AppBundle:Image')
    ->findNgosLogos();


    return $this->render('therlab/ngos.html.twig', array(
      'images'=> $images
    ));
  }

  public function artScienceAction()
  {


    $em = $this->getDoctrine()->getManager();
    
    //find all members
    $projects = $em->getRepository('AppBundle:ArtScience')
    ->findAllOrderedById();

    // L'appel de la vue ne change pas
    return $this->render('therlab/art-science.html.twig', array(
      'projects'=> $projects
    ));
  }

   public function publicationsAction()
  {

    $em = $this->getDoctrine()->getManager();
    
    //find all members
    $publications = $em->getRepository('AppBundle:Publication')
    ->findAllOrderedById();

    // L'appel de la vue ne change pas
    return $this->render('therlab/publications.html.twig', array(
      'publications'=> $publications
    ));
  }

  public function blaschkaAction()
  {

    $em = $this->getDoctrine()->getManager();
    
    //find all members
    $projects = $em->getRepository('AppBundle:Blaschka')
    ->findAllOrderedById();

    // L'appel de la vue ne change pas
    return $this->render('therlab/blaschka.html.twig', array(
      'projects'=> $projects
    ));
  }

  public function lightsheetAction()
  {

    $em = $this->getDoctrine()->getManager();
    
    //find all projects
    $projects = $em->getRepository('AppBundle:LightSheet')
    ->findAllOrderedById();

    // L'appel de la vue ne change pas
    return $this->render('therlab/light-sheet.html.twig', array(
      'projects'=> $projects
    ));
  }

  public function models3dAction()
  {
    $em = $this->getDoctrine()->getManager();
    
    //find all models
    $models = $em->getRepository('AppBundle:SketchfabModel')
    ->findAllOrderedById();
    // L'appel de la vue ne change pas
    return $this->render('therlab/3D-Models.html.twig', array(
      'models'=> $models
    ));
  }

  public function modelAction($id, Request $request)
  {
   $em = $this->getDoctrine()->getManager();

    // get the model of $id
    $model = $em
      ->getRepository('AppBundle:SketchfabModel')
      ->find($id)
    ;

     if (null === $model) {
      throw new NotFoundHttpException("Post's ".$id." not found");
    }

     return $this->render('therlab/3D-Model.html.twig', array(
      'model'=> $model
    ));
  }

}
