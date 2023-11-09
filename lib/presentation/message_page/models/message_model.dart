// ignore_for_file: must_be_immutable

import 'package:equatable/equatable.dart';
import 'messagelist_item_model.dart';

/// This class defines the variables used in the [message_page],
/// and is typically used to hold data that is passed between different parts of the application.
class MessageModel extends Equatable {
  MessageModel({this.messagelistItemList = const []});

  List<MessagelistItemModel> messagelistItemList;

  MessageModel copyWith({List<MessagelistItemModel>? messagelistItemList}) {
    return MessageModel(
      messagelistItemList: messagelistItemList ?? this.messagelistItemList,
    );
  }

  @override
  List<Object?> get props => [messagelistItemList];
}
