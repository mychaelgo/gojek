docker run --rm -v ${PWD}:/local openapitools/openapi-generator-cli generate -i /local/docs/goid-gojekapi.yaml -g typescript-axios --additional-properties=stringEnums=true,modelPropertyNaming=original,npmName=goid-gojek,useSingleRequestParameter=true -o /local/sdk/goid-gojek-node
cp .npmrc.example sdk/goid-gojek-node/.npmrc
cd sdk/goid-gojek-node
sedRepoString=", \"publishConfig\": { \"@mychaelgo:registry\": \"https:\/\/npm.pkg.github.com\" }"
sed -i -e "$(( $( wc -l < package.json) -1 ))s/$/\n$sedRepoString/" package.json
rm package.json-e
npm i
npm run build
