<?php

namespace Flaps;

/**
 *
 *
 * @since 1.0
 * @author Benedict Etzel <developer@beheh.de>
 */
interface ThrottlingStrategyInterface {

	public function isViolator($identifier);
}
