<?php


namespace App\Api;


use App\ApiConfigInterface;

/**
 * Implementation ApiConfigInterface in class
 */
class ApiConfig implements ApiConfigInterface
{
    private string $baseUri;
    private string $clientId;
    private string $clientSecret;
    private string $signingKey;

    /**
     * @param string $filePath
     * Path to JSON config file
     */
    public function __construct(string $filePath)
    {
        $file = file_get_contents($filePath);
        $json = json_decode($file);

        $this->baseUri = $json->baseUri;
        $this->clientId = $json->clientId;
        $this->clientSecret = $json->clientSecret;
        $this->signingKey = $json->signingKey;
    }

    /**
     * Method return baseUri
     * @return string
     */
    public function baseUri(): string
    {
        return $this->baseUri;
    }

    /**
     * Method return clientId
     * @return string
     */
    public function clientId(): string
    {
        return $this->clientId;
    }

    /**
     * Method return clientSecret
     * @return string
     */
    public function clientSecret(): string
    {
        return $this->clientSecret;
    }

    /**
     * Method return signingKey
     * @return string
     */
    public function signingKey(): string
    {
        return $this->signingKey;
    }
}
