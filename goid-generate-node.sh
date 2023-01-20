# https://docs.github.com/en/packages/quickstart

docker run --rm -v ${PWD}:/local openapitools/openapi-generator-cli generate -i /local/docs/goid-gojekapi.yaml -g typescript-axios --additional-properties=npmRepository=https://npm.pkg.github.com,stringEnums=true,modelPropertyNaming=original,npmName=@mychaelgo/goid-gojek,useSingleRequestParameter=true -o /local/sdk/goid-gojek-node
cp .npmrc.example sdk/goid-gojek-node/.npmrc
cd sdk/goid-gojek-node
sedRepoString=", \"repository\": { \"type\": \"git\", \"url\": \"git+https:\/\/github.com\/mychaelgo\/gojek.git\" }"
sed -i -e "$(( $( wc -l < package.json) -1 ))s/$/\n$sedRepoString/" package.json
rm package.json-e
npm i
npm run build
