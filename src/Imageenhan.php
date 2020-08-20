<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\AssessCompositionAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\AssessCompositionRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\AssessCompositionResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\AssessExposureAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\AssessExposureRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\AssessExposureResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\AssessSharpnessAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\AssessSharpnessRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\AssessSharpnessResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ChangeImageSizeAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ChangeImageSizeRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ChangeImageSizeResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\EnhanceImageColorAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\EnhanceImageColorRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\EnhanceImageColorResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ExtendImageStyleRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ExtendImageStyleResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\GetAsyncJobResultRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\GetAsyncJobResultResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ImageBlindCharacterWatermarkAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ImageBlindCharacterWatermarkRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ImageBlindCharacterWatermarkResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ImageBlindPicWatermarkAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ImageBlindPicWatermarkRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ImageBlindPicWatermarkResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ImitatePhotoStyleAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ImitatePhotoStyleRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ImitatePhotoStyleResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\IntelligentCompositionAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\IntelligentCompositionRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\IntelligentCompositionResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\MakeSuperResolutionImageAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\MakeSuperResolutionImageRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\MakeSuperResolutionImageResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RecolorHDImageAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RecolorHDImageRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RecolorHDImageResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RecolorImageRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RecolorImageResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RemoveImageSubtitlesAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RemoveImageSubtitlesRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RemoveImageSubtitlesResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RemoveImageWatermarkAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RemoveImageWatermarkRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RemoveImageWatermarkResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Rpc\Rpc\Config;
use AlibabaCloud\Tea\RpcUtils\RpcUtils;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Imageenhan extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('imageenhan', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param GetAsyncJobResultRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetAsyncJobResultResponse
     */
    public function getAsyncJobResult($request, $runtime)
    {
        Utils::validateModel($request);

        return GetAsyncJobResultResponse::fromMap($this->doRequest('GetAsyncJobResult', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param ImitatePhotoStyleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ImitatePhotoStyleResponse
     */
    public function imitatePhotoStyle($request, $runtime)
    {
        Utils::validateModel($request);

        return ImitatePhotoStyleResponse::fromMap($this->doRequest('ImitatePhotoStyle', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param ImitatePhotoStyleAdvanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ImitatePhotoStyleResponse
     */
    public function imitatePhotoStyleAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $imitatePhotoStylereq = new ImitatePhotoStyleRequest([]);
        RpcUtils::convert($request, $imitatePhotoStylereq);
        $imitatePhotoStylereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->imitatePhotoStyle($imitatePhotoStylereq, $runtime);
    }

    /**
     * @param EnhanceImageColorRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return EnhanceImageColorResponse
     */
    public function enhanceImageColor($request, $runtime)
    {
        Utils::validateModel($request);

        return EnhanceImageColorResponse::fromMap($this->doRequest('EnhanceImageColor', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param EnhanceImageColorAdvanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return EnhanceImageColorResponse
     */
    public function enhanceImageColorAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $enhanceImageColorreq = new EnhanceImageColorRequest([]);
        RpcUtils::convert($request, $enhanceImageColorreq);
        $enhanceImageColorreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->enhanceImageColor($enhanceImageColorreq, $runtime);
    }

    /**
     * @param RecolorHDImageRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RecolorHDImageResponse
     */
    public function recolorHDImage($request, $runtime)
    {
        Utils::validateModel($request);

        return RecolorHDImageResponse::fromMap($this->doRequest('RecolorHDImage', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param RecolorHDImageAdvanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RecolorHDImageResponse
     */
    public function recolorHDImageAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->urlObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $recolorHDImagereq = new RecolorHDImageRequest([]);
        RpcUtils::convert($request, $recolorHDImagereq);
        $recolorHDImagereq->url = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recolorHDImage($recolorHDImagereq, $runtime);
    }

    /**
     * @param AssessCompositionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AssessCompositionResponse
     */
    public function assessComposition($request, $runtime)
    {
        Utils::validateModel($request);

        return AssessCompositionResponse::fromMap($this->doRequest('AssessComposition', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param AssessCompositionAdvanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AssessCompositionResponse
     */
    public function assessCompositionAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $assessCompositionreq = new AssessCompositionRequest([]);
        RpcUtils::convert($request, $assessCompositionreq);
        $assessCompositionreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->assessComposition($assessCompositionreq, $runtime);
    }

    /**
     * @param AssessSharpnessRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AssessSharpnessResponse
     */
    public function assessSharpness($request, $runtime)
    {
        Utils::validateModel($request);

        return AssessSharpnessResponse::fromMap($this->doRequest('AssessSharpness', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param AssessSharpnessAdvanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AssessSharpnessResponse
     */
    public function assessSharpnessAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $assessSharpnessreq = new AssessSharpnessRequest([]);
        RpcUtils::convert($request, $assessSharpnessreq);
        $assessSharpnessreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->assessSharpness($assessSharpnessreq, $runtime);
    }

    /**
     * @param AssessExposureRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AssessExposureResponse
     */
    public function assessExposure($request, $runtime)
    {
        Utils::validateModel($request);

        return AssessExposureResponse::fromMap($this->doRequest('AssessExposure', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param AssessExposureAdvanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AssessExposureResponse
     */
    public function assessExposureAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $assessExposurereq = new AssessExposureRequest([]);
        RpcUtils::convert($request, $assessExposurereq);
        $assessExposurereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->assessExposure($assessExposurereq, $runtime);
    }

    /**
     * @param ImageBlindCharacterWatermarkRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ImageBlindCharacterWatermarkResponse
     */
    public function imageBlindCharacterWatermark($request, $runtime)
    {
        Utils::validateModel($request);

        return ImageBlindCharacterWatermarkResponse::fromMap($this->doRequest('ImageBlindCharacterWatermark', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param ImageBlindCharacterWatermarkAdvanceRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ImageBlindCharacterWatermarkResponse
     */
    public function imageBlindCharacterWatermarkAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->originImageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $imageBlindCharacterWatermarkreq = new ImageBlindCharacterWatermarkRequest([]);
        RpcUtils::convert($request, $imageBlindCharacterWatermarkreq);
        $imageBlindCharacterWatermarkreq->originImageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->imageBlindCharacterWatermark($imageBlindCharacterWatermarkreq, $runtime);
    }

    /**
     * @param RemoveImageSubtitlesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RemoveImageSubtitlesResponse
     */
    public function removeImageSubtitles($request, $runtime)
    {
        Utils::validateModel($request);

        return RemoveImageSubtitlesResponse::fromMap($this->doRequest('RemoveImageSubtitles', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param RemoveImageSubtitlesAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RemoveImageSubtitlesResponse
     */
    public function removeImageSubtitlesAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $removeImageSubtitlesreq = new RemoveImageSubtitlesRequest([]);
        RpcUtils::convert($request, $removeImageSubtitlesreq);
        $removeImageSubtitlesreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->removeImageSubtitles($removeImageSubtitlesreq, $runtime);
    }

    /**
     * @param RemoveImageWatermarkRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RemoveImageWatermarkResponse
     */
    public function removeImageWatermark($request, $runtime)
    {
        Utils::validateModel($request);

        return RemoveImageWatermarkResponse::fromMap($this->doRequest('RemoveImageWatermark', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param RemoveImageWatermarkAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RemoveImageWatermarkResponse
     */
    public function removeImageWatermarkAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $removeImageWatermarkreq = new RemoveImageWatermarkRequest([]);
        RpcUtils::convert($request, $removeImageWatermarkreq);
        $removeImageWatermarkreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->removeImageWatermark($removeImageWatermarkreq, $runtime);
    }

    /**
     * @param ImageBlindPicWatermarkRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ImageBlindPicWatermarkResponse
     */
    public function imageBlindPicWatermark($request, $runtime)
    {
        Utils::validateModel($request);

        return ImageBlindPicWatermarkResponse::fromMap($this->doRequest('ImageBlindPicWatermark', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param ImageBlindPicWatermarkAdvanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ImageBlindPicWatermarkResponse
     */
    public function imageBlindPicWatermarkAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->originImageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $imageBlindPicWatermarkreq = new ImageBlindPicWatermarkRequest([]);
        RpcUtils::convert($request, $imageBlindPicWatermarkreq);
        $imageBlindPicWatermarkreq->originImageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->imageBlindPicWatermark($imageBlindPicWatermarkreq, $runtime);
    }

    /**
     * @param IntelligentCompositionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return IntelligentCompositionResponse
     */
    public function intelligentComposition($request, $runtime)
    {
        Utils::validateModel($request);

        return IntelligentCompositionResponse::fromMap($this->doRequest('IntelligentComposition', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param IntelligentCompositionAdvanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return IntelligentCompositionResponse
     */
    public function intelligentCompositionAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $intelligentCompositionreq = new IntelligentCompositionRequest([]);
        RpcUtils::convert($request, $intelligentCompositionreq);
        $intelligentCompositionreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->intelligentComposition($intelligentCompositionreq, $runtime);
    }

    /**
     * @param ChangeImageSizeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ChangeImageSizeResponse
     */
    public function changeImageSize($request, $runtime)
    {
        Utils::validateModel($request);

        return ChangeImageSizeResponse::fromMap($this->doRequest('ChangeImageSize', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param ChangeImageSizeAdvanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ChangeImageSizeResponse
     */
    public function changeImageSizeAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->urlObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $changeImageSizereq = new ChangeImageSizeRequest([]);
        RpcUtils::convert($request, $changeImageSizereq);
        $changeImageSizereq->url = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->changeImageSize($changeImageSizereq, $runtime);
    }

    /**
     * @param ExtendImageStyleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ExtendImageStyleResponse
     */
    public function extendImageStyle($request, $runtime)
    {
        Utils::validateModel($request);

        return ExtendImageStyleResponse::fromMap($this->doRequest('ExtendImageStyle', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param MakeSuperResolutionImageRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return MakeSuperResolutionImageResponse
     */
    public function makeSuperResolutionImage($request, $runtime)
    {
        Utils::validateModel($request);

        return MakeSuperResolutionImageResponse::fromMap($this->doRequest('MakeSuperResolutionImage', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param MakeSuperResolutionImageAdvanceRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return MakeSuperResolutionImageResponse
     */
    public function makeSuperResolutionImageAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->urlObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $makeSuperResolutionImagereq = new MakeSuperResolutionImageRequest([]);
        RpcUtils::convert($request, $makeSuperResolutionImagereq);
        $makeSuperResolutionImagereq->url = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->makeSuperResolutionImage($makeSuperResolutionImagereq, $runtime);
    }

    /**
     * @param RecolorImageRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RecolorImageResponse
     */
    public function recolorImage($request, $runtime)
    {
        Utils::validateModel($request);

        return RecolorImageResponse::fromMap($this->doRequest('RecolorImage', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @param string $productId
     * @param string $regionId
     * @param string $endpointRule
     * @param string $network
     * @param string $suffix
     * @param array  $endpointMap
     * @param string $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap['regionId'])) {
            return $endpointMap['regionId'];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
