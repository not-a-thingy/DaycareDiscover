import 'package:equatable/equatable.dart';
import 'package:flutter/material.dart';
import '/core/app_export.dart';
import 'package:afiq_s_application2/presentation/drug_details_screen/models/drug_details_model.dart';
part 'drug_details_event.dart';
part 'drug_details_state.dart';

/// A bloc that manages the state of a DrugDetails according to the event that is dispatched to it.
class DrugDetailsBloc extends Bloc<DrugDetailsEvent, DrugDetailsState> {
  DrugDetailsBloc(DrugDetailsState initialState) : super(initialState) {
    on<DrugDetailsInitialEvent>(_onInitialize);
  }

  _onInitialize(
    DrugDetailsInitialEvent event,
    Emitter<DrugDetailsState> emit,
  ) async {}
}
