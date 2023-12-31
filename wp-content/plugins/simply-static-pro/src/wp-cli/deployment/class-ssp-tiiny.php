<?php

namespace simply_static_pro\commands\deployment;

use simply_static_pro\commands\Update_Command;

class Tiiny extends Update_Command {

	protected $section = 'deployment';

	protected $name = 'tiiny';

	protected $option_name = '';

	protected $description = 'Setup Tiiny.Host.';

	protected function get_fields() {
		return [
			'subdomain' => [
				'field' => 'subdomain',
				'name'  => 'tiiny_subdomain',
				'label' => 'Subdomain',
				'desc'  => "That's the part before your TLD. Your full URL is the combination of the subdomain plus the domain suffix."
			],
			'suffix'    => [
				'field' => 'suffix',
				'name'  => 'tiiny_domain_suffix',
				'label' => 'Domain Suffix',
				'desc'  => "This defaults to tiiny.site. If you have a custom domain configured in Tiiny.host, you can also use that one. Your URL will be {subdomain}.tiiny.site"
			],
			'password'  => [
				'field' => 'password',
				'name'  => 'tiiny_password',
				'label' => 'Password Protection ',
				'desc'  => "Adding a password will activate password protection on your static site. The website is only visible with the password."
			],
		];
	}

	public function get_synopsis() {

		$fields = $this->get_fields();

		$synopsis = [
			[
				'type'        => 'assoc',
				'name'        => 'field',
				'description' => "You can skip the whole setup and use this for specific fields.\nAvailable fields: \n" . array_reduce( array_keys( $fields ), function ( $carry, $item ) use ( $fields ) {
						return $carry .= '- ' . \WP_CLI::colorize( '%Y' . $item . '%n' ) . ': ' . $fields[ $item ]['desc'] . "\n";
					} ),
				'optional'    => true,
				'repeating'   => false,
			],
			[
				'type'        => 'assoc',
				'name'        => 'value',
				'description' => "The field Value that will be saved. This is required if using --field",
				'optional'    => true,
				'repeating'   => false,
			]
		];

		return array_merge( $synopsis, parent::get_synopsis() ); // TODO: Change the autogenerated stub
	}

	/**
	 * Run
	 *
	 * @param $args
	 * @param $options
	 *
	 * @return void
	 */
	public function run( $args, $options ) {

		$fields = $this->get_fields();

		if ( isset( $options['field'] ) ) {
			if ( ! isset( $fields[ $options['field'] ] ) ) {
				\WP_CLI::error( 'Not an existing field.' );

				return;
			}

			if ( ! isset( $options['value'] ) ) {
				\WP_CLI::error( 'Please provide a value for the field. Use --value to set it.' );

				return;
			}

			$this->update( $options['value'], $fields[ $options['field'] ]['name'] );
			\WP_CLI::success( 'Updated!' );

			return;
		}

		foreach ( $fields as $field ) {
			$value = $this->ask( 'Please enter value for ' . \WP_CLI::colorize( '%Y' . $field['label'] . '%n' ) . "\n" . $field['desc'] . "\nTo remove data from existing field just hit Enter.\n" );
			$this->update( $value, $field['name'] );
			\WP_CLI::success( 'Updated ' . $field['label'] . '!' );
		}
	}
}