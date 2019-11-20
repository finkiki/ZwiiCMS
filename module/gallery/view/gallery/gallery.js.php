/**
 * This file is part of Zwii.
 *
 * For full copyright and license information, please see the LICENSE
 * file that was distributed with this source code.
 *
 * @author Rémi Jean <remi.jean@outlook.com>
 * @copyright Copyright (C) 2008-2018, Rémi Jean
 * @license GNU General Public License, version 3
 * @link http://zwiicms.com/
 */

/**
 * Galerie d'image
 */
$(".galleryGalleryPicture").simpleLightbox({
	captionSelector: "self",
	captionType: "data",
	captionsData: "caption",
	closeText: "&times;"
});

// Traduite les légendes
$('body').removeClass("notranslate");