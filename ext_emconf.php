<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "solr_file_indexer"
 *
 * Auto generated by Extension Builder 2016-08-10
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title'            => 'Solr file indexing',
    'description'      => '',
    'category'         => 'plugin',
    'author'           => 'Sascha Wilking',
    'author_email'     => 'sascha.wilking@hmmh.de',
    'state'            => 'stable',
    'internal'         => '',
    'uploadfolder'     => '0',
    'createDirs'       => '',
    'clearCacheOnLoad' => 0,
    'version'          => '1.0.0',
    'constraints'      => [
        'depends'   => [
            'typo3' => '>=8.7',
            'solr' => '>=7.0',
            'php' => '>=7.0'
        ],
        'conflicts' => [],
        'suggests'  => [],
    ],
];
