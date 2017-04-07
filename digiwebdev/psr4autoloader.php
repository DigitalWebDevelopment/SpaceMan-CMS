<?php

/* 
 *         PSR-4 Class Autoloader
 *
 * Copyright 2017 Digital Web Development.
 *
 *         http://digiwebdev.com.au
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *         http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * The PSR-4 Class Autoloader follows the PSR-4 recommendations for the use of
 * namespaced object classes and is based on the examples of PSR-4 autoloader
 * given by PHP-FIG
 * 
 * @link http://www.php-fig.org/ 
 * 
 * the and modified by
 * 
 * @author Garrick Stace
 * 
 * for the purpose of autoloading object classes by their namespace structure as
 * they are called within the application code, reducing the need of multiple
 * require statements.
 */
