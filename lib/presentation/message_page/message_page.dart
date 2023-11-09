import '../message_page/widgets/messagelist_item_widget.dart';
import 'bloc/message_bloc.dart';
import 'models/message_model.dart';
import 'models/messagelist_item_model.dart';
import 'package:afiq_s_application2/core/app_export.dart';
import 'package:flutter/material.dart';

class MessagePage extends StatefulWidget {
  const MessagePage({Key? key}) : super(key: key);

  @override
  MessagePageState createState() => MessagePageState();

  static Widget builder(BuildContext context) {
    return BlocProvider<MessageBloc>(
        create: (context) =>
            MessageBloc(MessageState(messageModelObj: MessageModel()))
              ..add(MessageInitialEvent()),
        child: MessagePage());
  }
}

class MessagePageState extends State<MessagePage>
    with AutomaticKeepAliveClientMixin<MessagePage> {
  @override
  bool get wantKeepAlive => true;

  @override
  Widget build(BuildContext context) {
    mediaQueryData = MediaQuery.of(context);
    return SafeArea(
        child: Scaffold(
            backgroundColor: Colors.transparent,
            body: SizedBox(
                width: double.maxFinite,
                child: Column(children: [
                  SizedBox(height: 31.v),
                  _buildMessageList(context)
                ]))));
  }

  /// Section Widget
  Widget _buildMessageList(BuildContext context) {
    return Expanded(
        child: Padding(
            padding: EdgeInsets.symmetric(horizontal: 20.h),
            child: BlocSelector<MessageBloc, MessageState, MessageModel?>(
                selector: (state) => state.messageModelObj,
                builder: (context, messageModelObj) {
                  return ListView.separated(
                      physics: BouncingScrollPhysics(),
                      shrinkWrap: true,
                      separatorBuilder: (context, index) {
                        return SizedBox(height: 24.v);
                      },
                      itemCount:
                          messageModelObj?.messagelistItemList.length ?? 0,
                      itemBuilder: (context, index) {
                        MessagelistItemModel model =
                            messageModelObj?.messagelistItemList[index] ??
                                MessagelistItemModel();
                        return MessagelistItemWidget(model, onTapChat: () {
                          onTapChat(context);
                        });
                      });
                })));
  }

  /// Navigates to the chatScreen when the action is triggered.
  onTapChat(BuildContext context) {
    NavigatorService.pushNamed(
      AppRoutes.chatScreen,
    );
  }
}
