# example.rb - Accessing the SimplyRETS API via Ruby
# SimplyRETS, Inc - Copyright (c) 2015

require "net/http"
require "uri"
require "json"

## Define our API Endpoint and settings. Since the API is
## over HTTPS we set use_ssl to true.

uri  = URI.parse("https://api.simplyrets.com/properties")
http = Net::HTTP.new(uri.host, uri.port)
http.use_ssl = true

## Make the request. The API uses Basic Authorization for authentication with
## the API. Put your API Key/Secret there.

request = Net::HTTP::Get.new(uri.request_uri)
request.basic_auth("simplyrets", "simplyrets")
response = http.request(request)

## The response body, which contains the listings, is not held in response.body.
## We parse the JSON response into `listings`. Then we iterate over each listing
## to get the information we need.

listings = JSON.parse(response.body)

listings.each do |listing|
  puts listing['address']['full']
end
