/*
* Copyright 2021 Amazon.com, Inc. or its affiliates. All Rights Reserved.
*
* Licensed under the Apache License, Version 2.0 (the "License").
* You may not use this file except in compliance with the License.
* A copy of the License is located at
*
*  http://aws.amazon.com/apache2.0
*
* or in the "license" file accompanying this file. This file is distributed
* on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
* express or implied. See the License for the specific language governing
* permissions and limitations under the License.
*/

// NOTE: This file is generated and may not follow lint rules defined in your app
// Generated files can be excluded from analysis in analysis_options.yaml
// For more info, see: https://dart.dev/guides/language/analysis-options#excluding-code-from-analysis

// ignore_for_file: public_member_api_docs, annotate_overrides, dead_code, dead_codepublic_member_api_docs, depend_on_referenced_packages, file_names, library_private_types_in_public_api, no_leading_underscores_for_library_prefixes, no_leading_underscores_for_local_identifiers, non_constant_identifier_names, null_check_on_nullable_type_parameter, prefer_adjacent_string_concatenation, prefer_const_constructors, prefer_if_null_operators, prefer_interpolation_to_compose_strings, slash_for_doc_comments, sort_child_properties_last, unnecessary_const, unnecessary_constructor_name, unnecessary_late, unnecessary_new, unnecessary_null_aware_assignments, unnecessary_nullable_for_final_variable_declarations, unnecessary_string_interpolations, use_build_context_synchronously

import 'ModelProvider.dart';
import 'package:amplify_core/amplify_core.dart' as amplify_core;


/** This is an auto generated class representing the Schedule type in your schema. */
class Schedule extends amplify_core.Model {
  static const classType = const _ScheduleModelType();
  final String id;
  final String? _ScheduleName;
  final String? _description;
  final amplify_core.TemporalDate? _startDate;
  final amplify_core.TemporalDate? _endDate;
  final String? _tripImageUrl;
  final String? _tripImageKey;
  final amplify_core.TemporalDateTime? _createdAt;
  final amplify_core.TemporalDateTime? _updatedAt;

  @override
  getInstanceType() => classType;
  
  @Deprecated('[getId] is being deprecated in favor of custom primary key feature. Use getter [modelIdentifier] to get model identifier.')
  @override
  String getId() => id;
  
  ScheduleModelIdentifier get modelIdentifier {
      return ScheduleModelIdentifier(
        id: id
      );
  }
  
  String get ScheduleName {
    try {
      return _ScheduleName!;
    } catch(e) {
      throw amplify_core.AmplifyCodeGenModelException(
          amplify_core.AmplifyExceptionMessages.codeGenRequiredFieldForceCastExceptionMessage,
          recoverySuggestion:
            amplify_core.AmplifyExceptionMessages.codeGenRequiredFieldForceCastRecoverySuggestion,
          underlyingException: e.toString()
          );
    }
  }
  
  String get description {
    try {
      return _description!;
    } catch(e) {
      throw amplify_core.AmplifyCodeGenModelException(
          amplify_core.AmplifyExceptionMessages.codeGenRequiredFieldForceCastExceptionMessage,
          recoverySuggestion:
            amplify_core.AmplifyExceptionMessages.codeGenRequiredFieldForceCastRecoverySuggestion,
          underlyingException: e.toString()
          );
    }
  }
  
  amplify_core.TemporalDate get startDate {
    try {
      return _startDate!;
    } catch(e) {
      throw amplify_core.AmplifyCodeGenModelException(
          amplify_core.AmplifyExceptionMessages.codeGenRequiredFieldForceCastExceptionMessage,
          recoverySuggestion:
            amplify_core.AmplifyExceptionMessages.codeGenRequiredFieldForceCastRecoverySuggestion,
          underlyingException: e.toString()
          );
    }
  }
  
  amplify_core.TemporalDate get endDate {
    try {
      return _endDate!;
    } catch(e) {
      throw amplify_core.AmplifyCodeGenModelException(
          amplify_core.AmplifyExceptionMessages.codeGenRequiredFieldForceCastExceptionMessage,
          recoverySuggestion:
            amplify_core.AmplifyExceptionMessages.codeGenRequiredFieldForceCastRecoverySuggestion,
          underlyingException: e.toString()
          );
    }
  }
  
  String? get tripImageUrl {
    return _tripImageUrl;
  }
  
  String? get tripImageKey {
    return _tripImageKey;
  }
  
  amplify_core.TemporalDateTime? get createdAt {
    return _createdAt;
  }
  
  amplify_core.TemporalDateTime? get updatedAt {
    return _updatedAt;
  }
  
  const Schedule._internal({required this.id, required ScheduleName, required description, required startDate, required endDate, tripImageUrl, tripImageKey, createdAt, updatedAt}): _ScheduleName = ScheduleName, _description = description, _startDate = startDate, _endDate = endDate, _tripImageUrl = tripImageUrl, _tripImageKey = tripImageKey, _createdAt = createdAt, _updatedAt = updatedAt;
  
  factory Schedule({String? id, required String ScheduleName, required String description, required amplify_core.TemporalDate startDate, required amplify_core.TemporalDate endDate, String? tripImageUrl, String? tripImageKey}) {
    return Schedule._internal(
      id: id == null ? amplify_core.UUID.getUUID() : id,
      ScheduleName: ScheduleName,
      description: description,
      startDate: startDate,
      endDate: endDate,
      tripImageUrl: tripImageUrl,
      tripImageKey: tripImageKey);
  }
  
  bool equals(Object other) {
    return this == other;
  }
  
  @override
  bool operator ==(Object other) {
    if (identical(other, this)) return true;
    return other is Schedule &&
      id == other.id &&
      _ScheduleName == other._ScheduleName &&
      _description == other._description &&
      _startDate == other._startDate &&
      _endDate == other._endDate &&
      _tripImageUrl == other._tripImageUrl &&
      _tripImageKey == other._tripImageKey;
  }
  
  @override
  int get hashCode => toString().hashCode;
  
  @override
  String toString() {
    var buffer = new StringBuffer();
    
    buffer.write("Schedule {");
    buffer.write("id=" + "$id" + ", ");
    buffer.write("ScheduleName=" + "$_ScheduleName" + ", ");
    buffer.write("description=" + "$_description" + ", ");
    buffer.write("startDate=" + (_startDate != null ? _startDate!.format() : "null") + ", ");
    buffer.write("endDate=" + (_endDate != null ? _endDate!.format() : "null") + ", ");
    buffer.write("tripImageUrl=" + "$_tripImageUrl" + ", ");
    buffer.write("tripImageKey=" + "$_tripImageKey" + ", ");
    buffer.write("createdAt=" + (_createdAt != null ? _createdAt!.format() : "null") + ", ");
    buffer.write("updatedAt=" + (_updatedAt != null ? _updatedAt!.format() : "null"));
    buffer.write("}");
    
    return buffer.toString();
  }
  
  Schedule copyWith({String? ScheduleName, String? description, amplify_core.TemporalDate? startDate, amplify_core.TemporalDate? endDate, String? tripImageUrl, String? tripImageKey}) {
    return Schedule._internal(
      id: id,
      ScheduleName: ScheduleName ?? this.ScheduleName,
      description: description ?? this.description,
      startDate: startDate ?? this.startDate,
      endDate: endDate ?? this.endDate,
      tripImageUrl: tripImageUrl ?? this.tripImageUrl,
      tripImageKey: tripImageKey ?? this.tripImageKey);
  }
  
  Schedule copyWithModelFieldValues({
    ModelFieldValue<String>? ScheduleName,
    ModelFieldValue<String>? description,
    ModelFieldValue<amplify_core.TemporalDate>? startDate,
    ModelFieldValue<amplify_core.TemporalDate>? endDate,
    ModelFieldValue<String?>? tripImageUrl,
    ModelFieldValue<String?>? tripImageKey
  }) {
    return Schedule._internal(
      id: id,
      ScheduleName: ScheduleName == null ? this.ScheduleName : ScheduleName.value,
      description: description == null ? this.description : description.value,
      startDate: startDate == null ? this.startDate : startDate.value,
      endDate: endDate == null ? this.endDate : endDate.value,
      tripImageUrl: tripImageUrl == null ? this.tripImageUrl : tripImageUrl.value,
      tripImageKey: tripImageKey == null ? this.tripImageKey : tripImageKey.value
    );
  }
  
  Schedule.fromJson(Map<String, dynamic> json)  
    : id = json['id'],
      _ScheduleName = json['ScheduleName'],
      _description = json['description'],
      _startDate = json['startDate'] != null ? amplify_core.TemporalDate.fromString(json['startDate']) : null,
      _endDate = json['endDate'] != null ? amplify_core.TemporalDate.fromString(json['endDate']) : null,
      _tripImageUrl = json['tripImageUrl'],
      _tripImageKey = json['tripImageKey'],
      _createdAt = json['createdAt'] != null ? amplify_core.TemporalDateTime.fromString(json['createdAt']) : null,
      _updatedAt = json['updatedAt'] != null ? amplify_core.TemporalDateTime.fromString(json['updatedAt']) : null;
  
  Map<String, dynamic> toJson() => {
    'id': id, 'ScheduleName': _ScheduleName, 'description': _description, 'startDate': _startDate?.format(), 'endDate': _endDate?.format(), 'tripImageUrl': _tripImageUrl, 'tripImageKey': _tripImageKey, 'createdAt': _createdAt?.format(), 'updatedAt': _updatedAt?.format()
  };
  
  Map<String, Object?> toMap() => {
    'id': id,
    'ScheduleName': _ScheduleName,
    'description': _description,
    'startDate': _startDate,
    'endDate': _endDate,
    'tripImageUrl': _tripImageUrl,
    'tripImageKey': _tripImageKey,
    'createdAt': _createdAt,
    'updatedAt': _updatedAt
  };

  static final amplify_core.QueryModelIdentifier<ScheduleModelIdentifier> MODEL_IDENTIFIER = amplify_core.QueryModelIdentifier<ScheduleModelIdentifier>();
  static final ID = amplify_core.QueryField(fieldName: "id");
  static final SCHEDULENAME = amplify_core.QueryField(fieldName: "ScheduleName");
  static final DESCRIPTION = amplify_core.QueryField(fieldName: "description");
  static final STARTDATE = amplify_core.QueryField(fieldName: "startDate");
  static final ENDDATE = amplify_core.QueryField(fieldName: "endDate");
  static final TRIPIMAGEURL = amplify_core.QueryField(fieldName: "tripImageUrl");
  static final TRIPIMAGEKEY = amplify_core.QueryField(fieldName: "tripImageKey");
  static var schema = amplify_core.Model.defineSchema(define: (amplify_core.ModelSchemaDefinition modelSchemaDefinition) {
    modelSchemaDefinition.name = "Schedule";
    modelSchemaDefinition.pluralName = "Schedules";
    
    modelSchemaDefinition.authRules = [
      amplify_core.AuthRule(
        authStrategy: amplify_core.AuthStrategy.OWNER,
        ownerField: "owner",
        identityClaim: "cognito:username",
        provider: amplify_core.AuthRuleProvider.USERPOOLS,
        operations: const [
          amplify_core.ModelOperation.CREATE,
          amplify_core.ModelOperation.UPDATE,
          amplify_core.ModelOperation.DELETE,
          amplify_core.ModelOperation.READ
        ]),
      amplify_core.AuthRule(
        authStrategy: amplify_core.AuthStrategy.PRIVATE,
        operations: const [
          amplify_core.ModelOperation.CREATE,
          amplify_core.ModelOperation.UPDATE,
          amplify_core.ModelOperation.DELETE,
          amplify_core.ModelOperation.READ
        ]),
      amplify_core.AuthRule(
        authStrategy: amplify_core.AuthStrategy.PUBLIC,
        provider: amplify_core.AuthRuleProvider.IAM,
        operations: const [
          amplify_core.ModelOperation.CREATE,
          amplify_core.ModelOperation.UPDATE,
          amplify_core.ModelOperation.DELETE,
          amplify_core.ModelOperation.READ
        ])
    ];
    
    modelSchemaDefinition.addField(amplify_core.ModelFieldDefinition.id());
    
    modelSchemaDefinition.addField(amplify_core.ModelFieldDefinition.field(
      key: Schedule.SCHEDULENAME,
      isRequired: true,
      ofType: amplify_core.ModelFieldType(amplify_core.ModelFieldTypeEnum.string)
    ));
    
    modelSchemaDefinition.addField(amplify_core.ModelFieldDefinition.field(
      key: Schedule.DESCRIPTION,
      isRequired: true,
      ofType: amplify_core.ModelFieldType(amplify_core.ModelFieldTypeEnum.string)
    ));
    
    modelSchemaDefinition.addField(amplify_core.ModelFieldDefinition.field(
      key: Schedule.STARTDATE,
      isRequired: true,
      ofType: amplify_core.ModelFieldType(amplify_core.ModelFieldTypeEnum.date)
    ));
    
    modelSchemaDefinition.addField(amplify_core.ModelFieldDefinition.field(
      key: Schedule.ENDDATE,
      isRequired: true,
      ofType: amplify_core.ModelFieldType(amplify_core.ModelFieldTypeEnum.date)
    ));
    
    modelSchemaDefinition.addField(amplify_core.ModelFieldDefinition.field(
      key: Schedule.TRIPIMAGEURL,
      isRequired: false,
      ofType: amplify_core.ModelFieldType(amplify_core.ModelFieldTypeEnum.string)
    ));
    
    modelSchemaDefinition.addField(amplify_core.ModelFieldDefinition.field(
      key: Schedule.TRIPIMAGEKEY,
      isRequired: false,
      ofType: amplify_core.ModelFieldType(amplify_core.ModelFieldTypeEnum.string)
    ));
    
    modelSchemaDefinition.addField(amplify_core.ModelFieldDefinition.nonQueryField(
      fieldName: 'createdAt',
      isRequired: false,
      isReadOnly: true,
      ofType: amplify_core.ModelFieldType(amplify_core.ModelFieldTypeEnum.dateTime)
    ));
    
    modelSchemaDefinition.addField(amplify_core.ModelFieldDefinition.nonQueryField(
      fieldName: 'updatedAt',
      isRequired: false,
      isReadOnly: true,
      ofType: amplify_core.ModelFieldType(amplify_core.ModelFieldTypeEnum.dateTime)
    ));
  });
}

class _ScheduleModelType extends amplify_core.ModelType<Schedule> {
  const _ScheduleModelType();
  
  @override
  Schedule fromJson(Map<String, dynamic> jsonData) {
    return Schedule.fromJson(jsonData);
  }
  
  @override
  String modelName() {
    return 'Schedule';
  }
}

/**
 * This is an auto generated class representing the model identifier
 * of [Schedule] in your schema.
 */
class ScheduleModelIdentifier implements amplify_core.ModelIdentifier<Schedule> {
  final String id;

  /** Create an instance of ScheduleModelIdentifier using [id] the primary key. */
  const ScheduleModelIdentifier({
    required this.id});
  
  @override
  Map<String, dynamic> serializeAsMap() => (<String, dynamic>{
    'id': id
  });
  
  @override
  List<Map<String, dynamic>> serializeAsList() => serializeAsMap()
    .entries
    .map((entry) => (<String, dynamic>{ entry.key: entry.value }))
    .toList();
  
  @override
  String serializeAsString() => serializeAsMap().values.join('#');
  
  @override
  String toString() => 'ScheduleModelIdentifier(id: $id)';
  
  @override
  bool operator ==(Object other) {
    if (identical(this, other)) {
      return true;
    }
    
    return other is ScheduleModelIdentifier &&
      id == other.id;
  }
  
  @override
  int get hashCode =>
    id.hashCode;
}