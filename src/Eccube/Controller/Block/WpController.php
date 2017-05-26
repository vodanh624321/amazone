<?php

namespace Eccube\Controller\Block;

use Eccube\Application;

/**
 * 
 * 
 * @author Dung Le
 */
class WpController
{
    public function index(Application $app)
    {
        $wpApi = $app['eccube.service.wp_api']->getPosts();
        
        $post = $app['eccube.service.wp_api']->parsePosts($wpApi['body']);
        
        return $app->render('Block/wp_news.twig', array(
            'wp_news' => $post,
        ));
    }
}
