// ignore_for_file: must_be_immutable

part of 'message_bloc.dart';

/// Represents the state of Message in the application.
class MessageState extends Equatable {
  MessageState({this.messageModelObj});

  MessageModel? messageModelObj;

  @override
  List<Object?> get props => [
        messageModelObj,
      ];
  MessageState copyWith({MessageModel? messageModelObj}) {
    return MessageState(
      messageModelObj: messageModelObj ?? this.messageModelObj,
    );
  }
}
