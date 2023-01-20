docker run --rm -v ${PWD}:/local openapitools/openapi-generator-cli generate -i /local/docs/goid-gojekapi.yaml -g typescript-axios --additional-properties=stringEnums=true,modelPropertyNaming=original,npmName=goid-gojek,useSingleRequestParameter=true -o /local/sdk/goid-gojek-node
cd sdk/goid-gojek-node
npm i && npm run build
