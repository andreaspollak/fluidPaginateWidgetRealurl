<?php
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl'] = array(
	'_DEFAULT' => array(
		'fixedPostVars' => array(
			'paginate' => array(
				array(
					'GETvar' => 'tx_myext_mymodel[controller]',
					'noMatch' => 'bypass'
				),
				array(
					'GETvar' => 'tx_myext_mymodel[action]',
					'noMatch' => 'bypass'
				),
				array(
					'GETvar' => 'tx_myext_mymodel[mymodel]',
					'lookUpTable' => array(
						'table' => 'tx_myext_domain_model_mymodel',
						'id_field' => 'uid',
						'alias_field' => 'title',
						'addWhereClause' => ' AND NOT deleted',
						'useUniqueCache' => 'TRUE',
						'useUniqueCache_conf' => array(
							'strtolower' => 'TRUE',
							'spaceCharacter' => '-'
						),
						'autoUpdate' => 1
					)
				),
				array(
					'GETvar' => 'tx_myext_mymodel[@widget_0][currentPage]'
				),
				array(
					'GETvar' => 'tx_myext_mymodel[@widget_0][addQueryStringMethod]',
					'noMatch' => 'bypass'
				)
			),
			'1' => 'paginate'
		)
	)
)
?>