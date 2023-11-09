import 'package:equatable/equatable.dart';
import 'package:flutter/material.dart';
import '/core/app_export.dart';
import '../models/doctorlist_item_model.dart';
import 'package:afiq_s_application2/presentation/dr_list_screen/models/dr_list_model.dart';
part 'dr_list_event.dart';
part 'dr_list_state.dart';

/// A bloc that manages the state of a DrList according to the event that is dispatched to it.
class DrListBloc extends Bloc<DrListEvent, DrListState> {
  DrListBloc(DrListState initialState) : super(initialState) {
    on<DrListInitialEvent>(_onInitialize);
  }

  _onInitialize(
    DrListInitialEvent event,
    Emitter<DrListState> emit,
  ) async {
    emit(state.copyWith(
        drListModelObj: state.drListModelObj
            ?.copyWith(doctorlistItemList: fillDoctorlistItemList())));
  }

  List<DoctorlistItemModel> fillDoctorlistItemList() {
    return [
      DoctorlistItemModel(
          drMarcusHorizon: ImageConstant.imgProfilePic,
          title: "Dr. Marcus Horizon",
          chardiologist: "Chardiologist",
          ratting: "4.7",
          distance: "800m away"),
      DoctorlistItemModel(
          drMarcusHorizon: ImageConstant.imgProfilePic111x111,
          title: "Dr. Maria Elena",
          chardiologist: "Chardiologist",
          ratting: "4.7",
          distance: "800m away"),
      DoctorlistItemModel(
          drMarcusHorizon: ImageConstant.imgProfilePic1,
          title: "Dr. Stefi Jessi",
          chardiologist: "Chardiologist",
          ratting: "4.7",
          distance: "800m away"),
      DoctorlistItemModel(
          drMarcusHorizon: ImageConstant.imgProfilePic2,
          title: "Dr. Gerty Cori",
          chardiologist: "Chardiologist",
          ratting: "4.7",
          distance: "800m away")
    ];
  }
}
