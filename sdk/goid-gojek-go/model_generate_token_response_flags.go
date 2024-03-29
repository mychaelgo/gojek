/*
goid.gojekapi.com

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)

API version: 1.0.1
*/

// Code generated by OpenAPI Generator (https://openapi-generator.tech); DO NOT EDIT.

package goid_gojek_go

import (
	"encoding/json"
)

// GenerateTokenResponseFlags struct for GenerateTokenResponseFlags
type GenerateTokenResponseFlags struct {
	OnetapEligible *bool `json:"onetap_eligible,omitempty"`
	IsAppPinSet *bool `json:"is_app_pin_set,omitempty"`
}

// NewGenerateTokenResponseFlags instantiates a new GenerateTokenResponseFlags object
// This constructor will assign default values to properties that have it defined,
// and makes sure properties required by API are set, but the set of arguments
// will change when the set of required properties is changed
func NewGenerateTokenResponseFlags() *GenerateTokenResponseFlags {
	this := GenerateTokenResponseFlags{}
	return &this
}

// NewGenerateTokenResponseFlagsWithDefaults instantiates a new GenerateTokenResponseFlags object
// This constructor will only assign default values to properties that have it defined,
// but it doesn't guarantee that properties required by API are set
func NewGenerateTokenResponseFlagsWithDefaults() *GenerateTokenResponseFlags {
	this := GenerateTokenResponseFlags{}
	return &this
}

// GetOnetapEligible returns the OnetapEligible field value if set, zero value otherwise.
func (o *GenerateTokenResponseFlags) GetOnetapEligible() bool {
	if o == nil || o.OnetapEligible == nil {
		var ret bool
		return ret
	}
	return *o.OnetapEligible
}

// GetOnetapEligibleOk returns a tuple with the OnetapEligible field value if set, nil otherwise
// and a boolean to check if the value has been set.
func (o *GenerateTokenResponseFlags) GetOnetapEligibleOk() (*bool, bool) {
	if o == nil || o.OnetapEligible == nil {
		return nil, false
	}
	return o.OnetapEligible, true
}

// HasOnetapEligible returns a boolean if a field has been set.
func (o *GenerateTokenResponseFlags) HasOnetapEligible() bool {
	if o != nil && o.OnetapEligible != nil {
		return true
	}

	return false
}

// SetOnetapEligible gets a reference to the given bool and assigns it to the OnetapEligible field.
func (o *GenerateTokenResponseFlags) SetOnetapEligible(v bool) {
	o.OnetapEligible = &v
}

// GetIsAppPinSet returns the IsAppPinSet field value if set, zero value otherwise.
func (o *GenerateTokenResponseFlags) GetIsAppPinSet() bool {
	if o == nil || o.IsAppPinSet == nil {
		var ret bool
		return ret
	}
	return *o.IsAppPinSet
}

// GetIsAppPinSetOk returns a tuple with the IsAppPinSet field value if set, nil otherwise
// and a boolean to check if the value has been set.
func (o *GenerateTokenResponseFlags) GetIsAppPinSetOk() (*bool, bool) {
	if o == nil || o.IsAppPinSet == nil {
		return nil, false
	}
	return o.IsAppPinSet, true
}

// HasIsAppPinSet returns a boolean if a field has been set.
func (o *GenerateTokenResponseFlags) HasIsAppPinSet() bool {
	if o != nil && o.IsAppPinSet != nil {
		return true
	}

	return false
}

// SetIsAppPinSet gets a reference to the given bool and assigns it to the IsAppPinSet field.
func (o *GenerateTokenResponseFlags) SetIsAppPinSet(v bool) {
	o.IsAppPinSet = &v
}

func (o GenerateTokenResponseFlags) MarshalJSON() ([]byte, error) {
	toSerialize := map[string]interface{}{}
	if o.OnetapEligible != nil {
		toSerialize["onetap_eligible"] = o.OnetapEligible
	}
	if o.IsAppPinSet != nil {
		toSerialize["is_app_pin_set"] = o.IsAppPinSet
	}
	return json.Marshal(toSerialize)
}

type NullableGenerateTokenResponseFlags struct {
	value *GenerateTokenResponseFlags
	isSet bool
}

func (v NullableGenerateTokenResponseFlags) Get() *GenerateTokenResponseFlags {
	return v.value
}

func (v *NullableGenerateTokenResponseFlags) Set(val *GenerateTokenResponseFlags) {
	v.value = val
	v.isSet = true
}

func (v NullableGenerateTokenResponseFlags) IsSet() bool {
	return v.isSet
}

func (v *NullableGenerateTokenResponseFlags) Unset() {
	v.value = nil
	v.isSet = false
}

func NewNullableGenerateTokenResponseFlags(val *GenerateTokenResponseFlags) *NullableGenerateTokenResponseFlags {
	return &NullableGenerateTokenResponseFlags{value: val, isSet: true}
}

func (v NullableGenerateTokenResponseFlags) MarshalJSON() ([]byte, error) {
	return json.Marshal(v.value)
}

func (v *NullableGenerateTokenResponseFlags) UnmarshalJSON(src []byte) error {
	v.isSet = true
	return json.Unmarshal(src, &v.value)
}


