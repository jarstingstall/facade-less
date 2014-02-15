<?php namespace Acme\Repositories;

interface ArticleRepositoryInterface
{
	public function byPage($page = 1, $limit = 10);
	public function bySlug($slug);
	public function byTag($tag, $page = 1, $limit = 10);
}