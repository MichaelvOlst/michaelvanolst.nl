<?php 

function set_active($path, $active = 'active')
{
	return Request::is($path) ? $active : '';
}

function path()
{
	return public_path() . '/uploads';
}

function get_all_skills($skills)
{
	$allSkills = [];
	if (is_array($skills) ) {
		foreach ($skills as $skill)
		{
			$allSkills[] = $skill;
		}
		return implode(',', $allSkills);
	} 

	return false;
}

function createSlug($slug)
{
	$alltypes = '/[^\-\s\pN\pL]+/u';
	$spaces = '/[\-\s]+/';

	$slug = preg_replace($alltypes, '' , mb_strtolower($slug, 'UTF-8'));
	$slug = preg_replace($spaces, '-', $slug);
	$slug = trim($slug, '-');

	return $slug;
}


 ?>