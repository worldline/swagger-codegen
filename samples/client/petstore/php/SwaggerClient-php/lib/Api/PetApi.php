<?php
/**
 * PetApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * PetApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PetApi
{

    /**
     * API Client
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('http://petstore.swagger.io/v2');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     * @return PetApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * updatePet
     *
     * Update an existing pet
     *
     * @param \Swagger\Client\Model\Pet $body Pet object that needs to be added to the store (optional)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function updatePet($body = null)
    {
        list($response, $statusCode, $httpHeader) = $this->updatePetWithHttpInfo ($body);
        return $response; 
    }


    /**
     * updatePetWithHttpInfo
     *
     * Update an existing pet
     *
     * @param \Swagger\Client\Model\Pet $body Pet object that needs to be added to the store (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function updatePetWithHttpInfo($body = null)
    {
        
  
        // parse inputs
        $resourcePath = "/pet";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json', 'application/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json','application/xml'));
  
        
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'PUT',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
    /**
     * addPet
     *
     * Add a new pet to the store
     *
     * @param \Swagger\Client\Model\Pet $body Pet object that needs to be added to the store (optional)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function addPet($body = null)
    {
        list($response, $statusCode, $httpHeader) = $this->addPetWithHttpInfo ($body);
        return $response; 
    }


    /**
     * addPetWithHttpInfo
     *
     * Add a new pet to the store
     *
     * @param \Swagger\Client\Model\Pet $body Pet object that needs to be added to the store (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function addPetWithHttpInfo($body = null)
    {
        
  
        // parse inputs
        $resourcePath = "/pet";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json', 'application/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json','application/xml'));
  
        
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
    /**
     * findPetsByStatus
     *
     * Finds Pets by status
     *
     * @param string[] $status Status values that need to be considered for filter (optional)
     * @return \Swagger\Client\Model\Pet[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function findPetsByStatus($status = null)
    {
        list($response, $statusCode, $httpHeader) = $this->findPetsByStatusWithHttpInfo ($status);
        return $response; 
    }


    /**
     * findPetsByStatusWithHttpInfo
     *
     * Finds Pets by status
     *
     * @param string[] $status Status values that need to be considered for filter (optional)
     * @return Array of \Swagger\Client\Model\Pet[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function findPetsByStatusWithHttpInfo($status = null)
    {
        
  
        // parse inputs
        $resourcePath = "/pet/findByStatus";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json', 'application/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        
        if (is_array($status)) {
            $status = $this->apiClient->getSerializer()->serializeCollection($status, 'multi', true);
        }
        
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
        }
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\Pet[]'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Pet[]', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Pet[]', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * findPetsByTags
     *
     * Finds Pets by tags
     *
     * @param string[] $tags Tags to filter by (optional)
     * @return \Swagger\Client\Model\Pet[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function findPetsByTags($tags = null)
    {
        list($response, $statusCode, $httpHeader) = $this->findPetsByTagsWithHttpInfo ($tags);
        return $response; 
    }


    /**
     * findPetsByTagsWithHttpInfo
     *
     * Finds Pets by tags
     *
     * @param string[] $tags Tags to filter by (optional)
     * @return Array of \Swagger\Client\Model\Pet[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function findPetsByTagsWithHttpInfo($tags = null)
    {
        
  
        // parse inputs
        $resourcePath = "/pet/findByTags";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json', 'application/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        
        if (is_array($tags)) {
            $tags = $this->apiClient->getSerializer()->serializeCollection($tags, 'multi', true);
        }
        
        if ($tags !== null) {
            $queryParams['tags'] = $this->apiClient->getSerializer()->toQueryValue($tags);
        }
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\Pet[]'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Pet[]', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Pet[]', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getPetById
     *
     * Find pet by ID
     *
     * @param int $pet_id ID of pet that needs to be fetched (required)
     * @return \Swagger\Client\Model\Pet
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getPetById($pet_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getPetByIdWithHttpInfo ($pet_id);
        return $response; 
    }


    /**
     * getPetByIdWithHttpInfo
     *
     * Find pet by ID
     *
     * @param int $pet_id ID of pet that needs to be fetched (required)
     * @return Array of \Swagger\Client\Model\Pet, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getPetByIdWithHttpInfo($pet_id)
    {
        
        // verify the required parameter 'pet_id' is set
        if ($pet_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pet_id when calling getPetById');
        }
  
        // parse inputs
        $resourcePath = "/pet/{petId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json', 'application/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        // path params
        
        if ($pet_id !== null) {
            $resourcePath = str_replace(
                "{" . "petId" . "}",
                $this->apiClient->getSerializer()->toPathValue($pet_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api_key'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\Pet'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Pet', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Pet', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * updatePetWithForm
     *
     * Updates a pet in the store with form data
     *
     * @param string $pet_id ID of pet that needs to be updated (required)
     * @param string $name Updated name of the pet (optional)
     * @param string $status Updated status of the pet (optional)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function updatePetWithForm($pet_id, $name = null, $status = null)
    {
        list($response, $statusCode, $httpHeader) = $this->updatePetWithFormWithHttpInfo ($pet_id, $name, $status);
        return $response; 
    }


    /**
     * updatePetWithFormWithHttpInfo
     *
     * Updates a pet in the store with form data
     *
     * @param string $pet_id ID of pet that needs to be updated (required)
     * @param string $name Updated name of the pet (optional)
     * @param string $status Updated status of the pet (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function updatePetWithFormWithHttpInfo($pet_id, $name = null, $status = null)
    {
        
        // verify the required parameter 'pet_id' is set
        if ($pet_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pet_id when calling updatePetWithForm');
        }
  
        // parse inputs
        $resourcePath = "/pet/{petId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json', 'application/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/x-www-form-urlencoded'));
  
        
        
        // path params
        
        if ($pet_id !== null) {
            $resourcePath = str_replace(
                "{" . "petId" . "}",
                $this->apiClient->getSerializer()->toPathValue($pet_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($name !== null) {
            
            
            $formParams['name'] = $this->apiClient->getSerializer()->toFormValue($name);
            
        }// form params
        if ($status !== null) {
            
            
            $formParams['status'] = $this->apiClient->getSerializer()->toFormValue($status);
            
        }
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
    /**
     * deletePet
     *
     * Deletes a pet
     *
     * @param int $pet_id Pet id to delete (required)
     * @param string $api_key  (optional)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deletePet($pet_id, $api_key = null)
    {
        list($response, $statusCode, $httpHeader) = $this->deletePetWithHttpInfo ($pet_id, $api_key);
        return $response; 
    }


    /**
     * deletePetWithHttpInfo
     *
     * Deletes a pet
     *
     * @param int $pet_id Pet id to delete (required)
     * @param string $api_key  (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deletePetWithHttpInfo($pet_id, $api_key = null)
    {
        
        // verify the required parameter 'pet_id' is set
        if ($pet_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pet_id when calling deletePet');
        }
  
        // parse inputs
        $resourcePath = "/pet/{petId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json', 'application/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        // header params
        
        if ($api_key !== null) {
            $headerParams['api_key'] = $this->apiClient->getSerializer()->toHeaderValue($api_key);
        }
        // path params
        
        if ($pet_id !== null) {
            $resourcePath = str_replace(
                "{" . "petId" . "}",
                $this->apiClient->getSerializer()->toPathValue($pet_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'DELETE',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
    /**
     * uploadFile
     *
     * uploads an image
     *
     * @param int $pet_id ID of pet to update (required)
     * @param string $additional_metadata Additional data to pass to server (optional)
     * @param \SplFileObject $file file to upload (optional)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function uploadFile($pet_id, $additional_metadata = null, $file = null)
    {
        list($response, $statusCode, $httpHeader) = $this->uploadFileWithHttpInfo ($pet_id, $additional_metadata, $file);
        return $response; 
    }


    /**
     * uploadFileWithHttpInfo
     *
     * uploads an image
     *
     * @param int $pet_id ID of pet to update (required)
     * @param string $additional_metadata Additional data to pass to server (optional)
     * @param \SplFileObject $file file to upload (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function uploadFileWithHttpInfo($pet_id, $additional_metadata = null, $file = null)
    {
        
        // verify the required parameter 'pet_id' is set
        if ($pet_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pet_id when calling uploadFile');
        }
  
        // parse inputs
        $resourcePath = "/pet/{petId}/uploadImage";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json', 'application/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('multipart/form-data'));
  
        
        
        // path params
        
        if ($pet_id !== null) {
            $resourcePath = str_replace(
                "{" . "petId" . "}",
                $this->apiClient->getSerializer()->toPathValue($pet_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($additional_metadata !== null) {
            
            
            $formParams['additionalMetadata'] = $this->apiClient->getSerializer()->toFormValue($additional_metadata);
            
        }// form params
        if ($file !== null) {
            
            // PHP 5.5 introduced a CurlFile object that deprecates the old @filename syntax
            // See: https://wiki.php.net/rfc/curl-file-upload
            if (function_exists('curl_file_create')) {
                $formParams['file'] = curl_file_create($this->apiClient->getSerializer()->toFormValue($file));
            } else {
               $formParams['file'] = '@' . $this->apiClient->getSerializer()->toFormValue($file);
            }
            
            
        }
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
    /**
     * getPetByIdWithByteArray
     *
     * Fake endpoint to test byte array return by 'Find pet by ID'
     *
     * @param int $pet_id ID of pet that needs to be fetched (required)
     * @return ByteArray
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getPetByIdWithByteArray($pet_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getPetByIdWithByteArrayWithHttpInfo ($pet_id);
        return $response; 
    }


    /**
     * getPetByIdWithByteArrayWithHttpInfo
     *
     * Fake endpoint to test byte array return by 'Find pet by ID'
     *
     * @param int $pet_id ID of pet that needs to be fetched (required)
     * @return Array of ByteArray, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getPetByIdWithByteArrayWithHttpInfo($pet_id)
    {
        
        // verify the required parameter 'pet_id' is set
        if ($pet_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pet_id when calling getPetByIdWithByteArray');
        }
  
        // parse inputs
        $resourcePath = "/pet/{petId}?testing_byte_array=true";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json', 'application/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        // path params
        
        if ($pet_id !== null) {
            $resourcePath = str_replace(
                "{" . "petId" . "}",
                $this->apiClient->getSerializer()->toPathValue($pet_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api_key'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, 'ByteArray'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array($this->apiClient->getSerializer()->deserialize($response, 'ByteArray', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'ByteArray', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * addPetUsingByteArray
     *
     * Fake endpoint to test byte array in body parameter for adding a new pet to the store
     *
     * @param ByteArray $body Pet object in the form of byte array (optional)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function addPetUsingByteArray($body = null)
    {
        list($response, $statusCode, $httpHeader) = $this->addPetUsingByteArrayWithHttpInfo ($body);
        return $response; 
    }


    /**
     * addPetUsingByteArrayWithHttpInfo
     *
     * Fake endpoint to test byte array in body parameter for adding a new pet to the store
     *
     * @param ByteArray $body Pet object in the form of byte array (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function addPetUsingByteArrayWithHttpInfo($body = null)
    {
        
  
        // parse inputs
        $resourcePath = "/pet?testing_byte_array=true";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json', 'application/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json','application/xml'));
  
        
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = call_user_func_array('pack', array_merge(array('C*'), $body));
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
}
