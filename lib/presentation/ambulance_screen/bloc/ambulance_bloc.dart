import 'package:equatable/equatable.dart';
import 'package:flutter/material.dart';
import '/core/app_export.dart';
import 'package:afiq_s_application2/presentation/ambulance_screen/models/ambulance_model.dart';
part 'ambulance_event.dart';
part 'ambulance_state.dart';

/// A bloc that manages the state of a Ambulance according to the event that is dispatched to it.
class AmbulanceBloc extends Bloc<AmbulanceEvent, AmbulanceState> {
  AmbulanceBloc(AmbulanceState initialState) : super(initialState) {
    on<AmbulanceInitialEvent>(_onInitialize);
  }

  _onInitialize(
    AmbulanceInitialEvent event,
    Emitter<AmbulanceState> emit,
  ) async {
    emit(state.copyWith(searchController: TextEditingController()));
  }
}
