<?php

namespace PiP\PiPElementsBundle\Controller\ContentElement;

use Contao\ContentModel;
use Contao\BackendTemplate;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\ServiceAnnotation\ContentElement;
use Contao\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @ContentElement("content_box_stop", category="content_box", template="content_box_stop")
 */
class ContentBoxStop extends AbstractContentElementController
{
    protected function getResponse(
        Template $template,
        ContentModel $model,
        Request $request
    ): Response {
        if (
            $this->container
                ->get("contao.routing.scope_matcher")
                ->isBackendRequest($request)
        ) {
            $template = new BackendTemplate("be_wildcard");
            return $template->getResponse();
        }
        return $template->getResponse();
    }
}
