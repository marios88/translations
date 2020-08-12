<?php

/**
 * HTTP language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
	// CurlRequest
   'missingCurl'                => 'CURL must be enabled to use the CURLRequest class.',
   'invalidSSLKey'              => 'Cannot set SSL Key. {0} is not a valid file.',
   'sslCertNotFound'            => 'SSL certificate not found at: {0}',
   'curlError'                  => '{0} : {1}',

	// IncomingRequest
   'invalidNegotiationType'     => '{0} is not a valid negotiation type. Must be one of: media, charset, encoding, language.',

	// Message
   'invalidHTTPProtocol'        => 'Invalid HTTP Protocol Version. Must be one of: {0}',

	// Negotiate
   'emptySupportedNegotiations' => 'You must provide an array of supported values to all Negotiations.',

	// RedirectResponse
   'invalidRoute'               => '{0} route cannot be found while reverse-routing.',

	// DownloadResponse
   'cannotSetBinary'            => 'When setting filepath cannot set binary.',
   'cannotSetFilepath'          => 'When setting binary cannot set filepath: {0}',
   'notFoundDownloadSource'     => 'Not found download body source.',
   'cannotSetCache'             => 'It does not support caching for downloading.',
   'cannotSetStatusCode'        => 'It does not support change status code for downloading. code: {0}, reason: {1}',

	// Response
   'missingResponseStatus'      => 'HTTP Response is missing a status code',
   'invalidStatusCode'          => '{0} is not a valid HTTP return status code',
   'unknownStatusCode'          => 'Unknown HTTP status code provided with no message: {0}',

	// URI
   'cannotParseURI'             => 'Unable to parse URI: {0}',
   'segmentOutOfRange'          => 'Request URI segment is out of range: {0}',
   'invalidPort'                => 'Ports must be between 0 and 65535. Given: {0}',
   'malformedQueryString'       => 'Query strings may not include URI fragments.',

	// Page Not Found
   'pageNotFound'               => 'Η σελίδα δεν βρέθηκε',
   'emptyController'            => 'Δεν έχει οριστεί Controller.',
   'controllerNotFound'         => 'Ο Controller η μέθοδος του method δεν βρέθηκαν: {0}::{1}',
   'methodNotFound'             => 'Η μέθοδος του Controller δεν βρέθηκε: {0}',

	// CSRF
   'disallowedAction'           => 'Η ενέργεια που ζητήσατε δεν επιτρέπεται.',

	// Uploaded file moving
   'alreadyMoved'               => 'The uploaded file has already been moved.',
   'invalidFile'                => 'The original file is not a valid file.',
   'moveFailed'                 => 'Could not move file {0} to {1} ({2})',

   'uploadErrOk'                => 'Το αρχείο μεταφορτώθηκε με επιτυχία.',
   'uploadErrIniSize'           => 'Το αρχείο "%s" exceeds your upload_max_filesize ini directive.',
   'uploadErrFormSize'          => 'Το αρχείο "%s" exceeds the upload limit defined in your form.',
   'uploadErrPartial'           => 'Το αρχείο "%s" was only partially uploaded.',
   'uploadErrNoFile'            => 'Δεν μεταφορτώθηκε κανένα αρχείο.',
   'uploadErrCantWrite'         => 'Το αρχείο "%s" δεν ήταν δυνατό να γραφτεί στον δίσκο.',
   'uploadErrNoTmpDir'          => 'Το αρχείο δεν ήταν δυνατόν να μεταφορτωθεί: λείπει ο προσωρινός φάκελος.',
   'uploadErrExtension'         => 'Η μεταφορτώση του αρχείου διακόπηκε από επέκταση της PHP.',
   'uploadErrUnknown'           => 'Το αρχείο "%s" δεν μεταφορτώθηκε λόγω άγνωστου σφάλματος.',
];
