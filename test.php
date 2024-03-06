$args => array(
  'word' => array(
    'type' => 'string',
    'required' => true,
    'description' => 'The word to search for'
  ),
)

if($args):
  while($row = $result->fetch_assoc()):
    $word = $row['word'];
    if($word == $args['word']):
      echo $word;
    endif;
endif;

// Path: test.php
