<?php

declare(strict_types=1);

namespace Mvc\Controller;

use Mvc\Entity\Video;
use Mvc\Repository\VideoRepository;

class VideoFormController implements Controller
{
    public function __construct(private VideoRepository $videoRepository)
    {
    }

    public function requestProcess(): void
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        /** @var ?Video $video */
        $video = null;
        if ($id !== null && $id !== false) {
            $video = $this->videoRepository->find($id);
        }

        require_once __DIR__ . '/../../views/video-form.php';
    }
}