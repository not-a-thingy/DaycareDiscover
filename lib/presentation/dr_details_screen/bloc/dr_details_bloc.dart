import 'package:equatable/equatable.dart';
import 'package:flutter/material.dart';
import '/core/app_export.dart';
import '../models/dates_item_model.dart';
import '../models/timeslots_item_model.dart';
import 'package:afiq_s_application2/presentation/dr_details_screen/models/dr_details_model.dart';
part 'dr_details_event.dart';
part 'dr_details_state.dart';

/// A bloc that manages the state of a DrDetails according to the event that is dispatched to it.
class DrDetailsBloc extends Bloc<DrDetailsEvent, DrDetailsState> {
  DrDetailsBloc(DrDetailsState initialState) : super(initialState) {
    on<DrDetailsInitialEvent>(_onInitialize);
    on<UpdateChipViewEvent>(_updateChipView);
  }

  _onInitialize(
    DrDetailsInitialEvent event,
    Emitter<DrDetailsState> emit,
  ) async {
    emit(state.copyWith(
        drDetailsModelObj: state.drDetailsModelObj?.copyWith(
            datesItemList: fillDatesItemList(),
            timeslotsItemList: fillTimeslotsItemList())));
  }

  _updateChipView(
    UpdateChipViewEvent event,
    Emitter<DrDetailsState> emit,
  ) {
    List<TimeslotsItemModel> newList = List<TimeslotsItemModel>.from(
        state.drDetailsModelObj!.timeslotsItemList);
    newList[event.index] =
        newList[event.index].copyWith(isSelected: event.isSelected);
    emit(state.copyWith(
        drDetailsModelObj:
            state.drDetailsModelObj?.copyWith(timeslotsItemList: newList)));
  }

  List<DatesItemModel> fillDatesItemList() {
    return [
      DatesItemModel(mon: "Mon", date: "21"),
      DatesItemModel(mon: "Tue", date: "22"),
      DatesItemModel(mon: "Wed", date: "23"),
      DatesItemModel(mon: "Thu", date: "24"),
      DatesItemModel(mon: "Fri", date: "25"),
      DatesItemModel(mon: "Sat", date: "26"),
      DatesItemModel(mon: "Sat", date: "26")
    ];
  }

  List<TimeslotsItemModel> fillTimeslotsItemList() {
    return List.generate(9, (index) => TimeslotsItemModel());
  }
}
