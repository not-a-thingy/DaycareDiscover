// ignore_for_file: must_be_immutable

part of 'message_tab_container_bloc.dart';

/// Represents the state of MessageTabContainer in the application.
class MessageTabContainerState extends Equatable {
  MessageTabContainerState({this.messageTabContainerModelObj});

  MessageTabContainerModel? messageTabContainerModelObj;

  @override
  List<Object?> get props => [
        messageTabContainerModelObj,
      ];
  MessageTabContainerState copyWith(
      {MessageTabContainerModel? messageTabContainerModelObj}) {
    return MessageTabContainerState(
      messageTabContainerModelObj:
          messageTabContainerModelObj ?? this.messageTabContainerModelObj,
    );
  }
}
