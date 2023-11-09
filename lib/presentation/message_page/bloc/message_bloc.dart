import 'package:equatable/equatable.dart';
import 'package:flutter/material.dart';
import '/core/app_export.dart';
import '../models/messagelist_item_model.dart';
import 'package:afiq_s_application2/presentation/message_page/models/message_model.dart';
part 'message_event.dart';
part 'message_state.dart';

/// A bloc that manages the state of a Message according to the event that is dispatched to it.
class MessageBloc extends Bloc<MessageEvent, MessageState> {
  MessageBloc(MessageState initialState) : super(initialState) {
    on<MessageInitialEvent>(_onInitialize);
  }

  _onInitialize(
    MessageInitialEvent event,
    Emitter<MessageState> emit,
  ) async {
    emit(state.copyWith(
        messageModelObj: state.messageModelObj
            ?.copyWith(messagelistItemList: fillMessagelistItemList())));
  }

  List<MessagelistItemModel> fillMessagelistItemList() {
    return [
      MessagelistItemModel(
          drMarcusHorizon: ImageConstant.imgProfileThumbnail,
          drMarcusHorizon1: "Dr. Marcus Horizon",
          time: "10.24",
          iDonTHaveAny: "I don,t have any fever, but headchace..."),
      MessagelistItemModel(
          drMarcusHorizon: ImageConstant.imgProfileThumbnail50x50,
          drMarcusHorizon1: "Dr. Alysa Hana",
          time: "09:04",
          iDonTHaveAny: "Hello, How can i help you?"),
      MessagelistItemModel(
          drMarcusHorizon: ImageConstant.imgProfileThumbnail1,
          drMarcusHorizon1: "Dr. Maria Elena",
          time: "08:57",
          iDonTHaveAny: "Do you have fever?")
    ];
  }
}
