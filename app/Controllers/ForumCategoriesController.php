<?php

declare(strict_types=1);

namespace App\Controllers;

use DI\Container;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Helpers\Core\PDOService;

class ForumCategoriesController extends BaseController
{
    protected PDOService $db;

    public function __construct(Container $container)
    {
        parent::__construct($container);
        $this->db = $container->get(PDOService::class);
    }

    public function index(Request $request, Response $response, array $args): Response
    {

        $data = [
            'page_title' => 'Welcome to Elsia Online',
            'page_layout' => 'forum-categories-layout',
            'contentView' => APP_VIEWS_PATH . '/forumCategoriesView.php',
            'isNavBarShown' => true,
            'data' => [
                'categories' => "",
            ]
        ];

        return $this->render($response, 'common/layout.php', $data);
    }

    public function error(Request $request, Response $response, array $args): Response
    {
        return $this->render($response, 'errorView.php');
    }
}   