<?php

return function ($site) {

  $query   = get('q');
  $result = $site->search($query, 'title|tags|name|body|position|team');
  $results = $result->filterBy("template", "in" , ["publication" , "event" , "story", "staff" , "team" ]);

  return [
    'query'   => $query,
    'results' => $results,
  ];

};