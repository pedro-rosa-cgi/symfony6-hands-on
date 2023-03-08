<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\MicroPost;
use App\Repository\CommentRepository;
use App\Repository\MicroPostRepository;
use App\Repository\UserProfileRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    private array $messages = [
        ['message' => 'Hello', 'created' => '2022/12/12'],
        ['message' => 'Hi', 'created' => '2022/11/12'],
        ['message' => 'Bye!', 'created' => '2021/05/12']
    ];


    #[Route('/', name: 'app_index')]
    public function index(UserProfileRepository $profiles, MicroPostRepository $posts, CommentRepository $comments): Response
    {
//        $post = new MicroPost();
//        $post->setTitle('Hello');
//        $post->setText('Hello');
//        $post->setCreated(new \DateTime());
//
//        $comment = new Comment();
//        $comment->setText('Hello');
////        $comment->setPost($post);
////        $post->addComment($comment);
//
//        $comments->save($comment);
//        $posts->save($post, true);


//        $user = new User();
//        $user->setEmail('user@email.com');
//        $user->setPassword('12345678');
//
//        $profile = new UserProfile();
//        $profile->setUser($user);
//        $profiles->save($profile, true);


//        $profile = $profiles->find(1);
//        $profiles->remove($profile, true);

        return $this->render(
            'hello/index.html.twig',
            [
                'messages' => $this->messages,
                'limit' => 3
            ]
        );

    }

    #[Route('/messages/{id<\d+>}', name: 'app_show_one')]
    public function showOne(int $id): Response
    {
//      return new Response($this->messages[$id]);

        return $this->render(
            'hello/show_one.html.twig',
            [
                'message' => $this->messages[$id]
            ]
        );
    }
}