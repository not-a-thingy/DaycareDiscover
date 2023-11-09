import 'package:equatable/equatable.dart';
import 'package:flutter/material.dart';
import '/core/app_export.dart';
import '../models/drugslist_item_model.dart';
import '../models/drugslist1_item_model.dart';
import 'package:afiq_s_application2/presentation/pharmacy_screen/models/pharmacy_model.dart';
part 'pharmacy_event.dart';
part 'pharmacy_state.dart';

/// A bloc that manages the state of a Pharmacy according to the event that is dispatched to it.
class PharmacyBloc extends Bloc<PharmacyEvent, PharmacyState> {
  PharmacyBloc(PharmacyState initialState) : super(initialState) {
    on<PharmacyInitialEvent>(_onInitialize);
  }

  List<DrugslistItemModel> fillDrugslistItemList() {
    return [
      DrugslistItemModel(
          panadol: ImageConstant.imgDrugThumbnail,
          panadol1: "Panadol",
          quantiity: "20pcs",
          price: "15.99"),
      DrugslistItemModel(
          panadol: ImageConstant.imgDrugThumbnail50x50,
          panadol1: "Bodrex Herbal",
          quantiity: "100ml",
          price: "7.99"),
      DrugslistItemModel(
          panadol: ImageConstant.imgDrugThumbnail1,
          panadol1: "Konidin",
          quantiity: "3pcs",
          price: "5.99")
    ];
  }

  List<Drugslist1ItemModel> fillDrugslist1ItemList() {
    return [
      Drugslist1ItemModel(
          oBHCombi: ImageConstant.imgDrugThumbnail1,
          panadol: "OBH Combi",
          measurement: "75ml",
          price: "9.99"),
      Drugslist1ItemModel(
          oBHCombi: ImageConstant.imgDrugThumbnail2,
          panadol: "Betadine",
          measurement: "50ml",
          price: "6.99"),
      Drugslist1ItemModel(
          oBHCombi: ImageConstant.imgDrugThumbnail3,
          panadol: "Bodrexin",
          measurement: "50ml",
          price: "7.99")
    ];
  }

  _onInitialize(
    PharmacyInitialEvent event,
    Emitter<PharmacyState> emit,
  ) async {
    emit(state.copyWith(searchController: TextEditingController()));
    emit(state.copyWith(
        pharmacyModelObj: state.pharmacyModelObj?.copyWith(
            drugslistItemList: fillDrugslistItemList(),
            drugslist1ItemList: fillDrugslist1ItemList())));
  }
}
