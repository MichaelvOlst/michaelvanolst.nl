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