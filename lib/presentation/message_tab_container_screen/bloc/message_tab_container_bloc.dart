import 'package:equatable/equatable.dart';
import 'package:flutter/material.dart';
import '/core/app_export.dart';
import 'package:afiq_s_application2/presentation/message_tab_container_screen/models/message_tab_container_model.dart';
part 'message_tab_container_event.dart';
part 'message_tab_container_state.dart';

/// A bloc that manages the state of a MessageTabContainer according to the event that is dispatched to it.
class MessageTabContainerBloc
    extends Bloc<MessageTabContainerEvent, MessageTabContainerState> {
  MessageTabContainerBloc(MessageTabContainerState initialState)
      : super(initialState) {
    on<MessageTabContainerInitialEvent>(_onInitialize);
  }

  _onInitialize(
    MessageTabContainerInitialEvent event,
    Emitter<MessageTabContainerState> emit,
  ) async {}
}
