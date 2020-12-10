<?php

namespace Customer\Handler;

use Laminas\Diactoros\Response\HtmlResponse;
use Mezzio\Template\TemplateRendererInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class CustomerHandler implements RequestHandlerInterface
{
    /** @var null|TemplateRendererInterface */
    private $template;

    public function __construct(
        TemplateRendererInterface $template
    ) {
        $this->template = $template;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $data = [];

        return new HtmlResponse($this->template->render('customer::customer', $data));
    }
}
