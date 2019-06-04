<?php

declare(strict_types=1);

/*
 * This file is part of Snipplr PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\Snipplr\API;

use Plients\Snipplr\AbstractAPI;

class Snippet extends AbstractAPI
{
    public function listing($tags, $sort = 'title', $limit = null): HttpResponse
    {
        return $this->client->post('snippet.list', compact('tags', 'sort', 'limit'));
    }

    public function details($snippet_id): HttpResponse
    {
        return $this->client->post('snippet.get', compact('snippet_id'));
    }

    public function create($title, $code, $tags = null, $language = null): HttpResponse
    {
        return $this->client->post('snippet.post', compact('title', 'code', 'tags', 'language'));
    }

    public function delete($snippet_id): HttpResponse
    {
        return $this->client->post('snippet.delete', compact('snippet_id'));
    }

    public function validateKey(): HttpResponse
    {
        return $this->client->post('user.checkkey');
    }

    public function languages(): HttpResponse
    {
        return $this->client->post('languages.list');
    }
}
